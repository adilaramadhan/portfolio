"use client";

import { useEffect, useState } from "react";
import Image from "next/image";
import { ArrowDown, ArrowUpRight, BriefcaseBusiness, Check, ChevronUp, Download, Eye, Home as HomeIcon, Languages, Layers, Mail, ShieldCheck, UserRound, Wrench, X, type LucideIcon } from "lucide-react";

import { Badge } from "@/components/ui/badge";
import { copy, CV_URL, type Lang } from "@/lib/i18n";

const GithubIcon = ({ size = 17 }: { size?: number }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
);
const LinkedinIcon = ({ size = 17 }: { size?: number }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
);

const navKeys = ["home", "about", "skills", "projects", "experience", "contact"] as const;
const tabIcons: Record<(typeof navKeys)[number], LucideIcon> = { home: HomeIcon, about: UserRound, skills: Wrench, projects: BriefcaseBusiness, experience: Layers, contact: Mail };
const skills = ["Manual Testing", "API Testing", "Regression Testing", "Exploratory Testing", "Bug Reporting", "Test Case Design", "Selenium", "Katalon Studio", "Postman", "Apache JMeter"];
const roles = ["Quality Assurance Engineer", "API & Manual Tester", "Test Automation Learner"];

export default function Home() {
  const [cvOpen, setCvOpen] = useState(false);
  const [roleIndex, setRoleIndex] = useState(0);
  const [activeSection, setActiveSection] = useState("home");
  const [lang, setLang] = useState<Lang>(() => (typeof window !== "undefined" && window.localStorage.getItem("lang") === "id" ? "id" : "en"));
  const t = copy[lang];
  useEffect(() => {
    const timer = window.setInterval(() => setRoleIndex((v) => (v + 1) % roles.length), 2800);
    const observer = new IntersectionObserver((entries) => entries.forEach((entry) => entry.isIntersecting && setActiveSection(entry.target.id)), { rootMargin: "-35% 0px -55% 0px" });
    document.querySelectorAll("main section[id]").forEach((section) => observer.observe(section));
    const reveal = new IntersectionObserver((entries) => entries.forEach((entry) => { if (entry.isIntersecting) { entry.target.classList.add("is-visible"); reveal.unobserve(entry.target); } }), { threshold: 0.12 });
    document.querySelectorAll(".reveal").forEach((el) => reveal.observe(el));
    return () => { clearInterval(timer); observer.disconnect(); reveal.disconnect(); };
  }, []);
  useEffect(() => { document.documentElement.lang = lang; }, [lang]);
  useEffect(() => {
    if (!cvOpen) return;
    const onKey = (e: KeyboardEvent) => { if (e.key === "Escape") setCvOpen(false); };
    window.addEventListener("keydown", onKey);
    document.body.style.overflow = "hidden";
    return () => { window.removeEventListener("keydown", onKey); document.body.style.overflow = ""; };
  }, [cvOpen]);
  const links = navKeys.map((id) => [id, t.nav[id]] as const);
  const tabLinks = navKeys.map((id) => [id, tabIcons[id], t.nav[id]] as const);
  const switchLang = () => {
    const next: Lang = lang === "en" ? "id" : "en";
    setLang(next);
    window.localStorage.setItem("lang", next);
    setRoleIndex(0);
  };

  return <>
    <header className="site-header"><nav className="nav-shell" aria-label="Main navigation">
      <a href="#home" className="brand"><span className="brand-mark"><ShieldCheck size={18}/></span><span>ADILA<span className="brand-accent">.QA</span></span></a>
      <div className="desktop-nav">{links.map(([id, label]) => <a key={id} className={activeSection === id ? "nav-link active" : "nav-link"} href={`#${id}`}>{label}</a>)}</div>
      <div className="nav-side"><button type="button" className="lang-toggle" onClick={switchLang} aria-label={t.langLabel} title={t.langLabel}><Languages size={15}/>{lang.toUpperCase()}</button><a href="#contact" className="nav-cta"><span className="availability-dot"/> {t.available} <ArrowUpRight size={14}/></a></div>
    </nav></header>
    <nav className="tabbar" aria-label="Section navigation">{tabLinks.map(([id, Icon, label]) => <a key={id} className={activeSection === id ? "tab active" : "tab"} href={`#${id}`}><Icon size={18}/><span>{label}</span></a>)}</nav>
    <main>
      <section id="home" className="hero-section"><div className="hero-wrap">
        <div className="hero-copy"><div className="eyebrow"><span className="availability-dot"/> {t.hero.role} <span className="eyebrow-line"/> {t.hero.location}</div>
          <h1>{t.hero.h1a}<br/>{t.hero.h1b} <em>{t.hero.h1em}</em></h1>
          <p className="hero-lede">{t.hero.lede}</p>
          <div className="role-line"><span className="role-prompt">{t.hero.focus}</span><span className="role-value" key={roleIndex}>{t.hero.roles[roleIndex]}</span></div>
          <div className="hero-actions"><a href="#projects" className="primary-button">{t.hero.ctaPrimary} <ArrowUpRight size={16}/></a><button type="button" className="outline-button" onClick={() => setCvOpen(true)}><Eye size={15}/> {t.hero.ctaCv}</button></div>
          <a className="scroll-cue" href="#about"><span className="scroll-icon"><ArrowDown size={14}/></span> {t.hero.scroll}</a>
        </div>
        <div className="hero-visual"><div className="hero-photo"><Image src="/assets/profile.webp" alt="Adila Ramadhan" fill priority sizes="(max-width: 760px) 80vw, 420px"/><div className="photo-index">01 <span>/</span> {t.hero.photoIndex}</div></div><div className="visual-caption"><span className="caption-mark">A.</span><div><strong>Adila Ramadhan</strong><small>{t.hero.captionRole}</small></div><span className="caption-status"><span className="availability-dot"/> {t.hero.captionStatus}</span></div></div>
      </div><div className="hero-bottom"><span>{t.hero.bottom[0]}</span><i/><span>{t.hero.bottom[1]}</span><i/><span>{t.hero.bottom[2]}</span><span className="hero-bottom-note">{t.hero.bottomNote}</span></div></section>

      <section id="about" className="section about-section"><div className="section-wrap about-grid"><div className="section-intro reveal"><p className="section-kicker">{t.about.kicker}</p><h2>{t.about.h2a}<br/>{t.about.h2b} <em>{t.about.h2em}</em></h2><p className="section-lede">{t.about.lede}</p></div><div className="about-copy reveal"><p>{t.about.p1}</p><p>{t.about.p2}</p><blockquote>{t.about.quote}</blockquote><div className="about-signoff"><span className="signoff-line"/> {t.about.signoff}</div></div></div></section>

      <section id="skills" className="section skills-section"><div className="section-wrap"><div className="section-heading reveal"><div><p className="section-kicker">{t.skills.kicker}</p><h2>{t.skills.h2}</h2></div><p className="heading-aside">{t.skills.aside}</p></div><div className="skill-layout"><div className="skill-feature reveal"><span className="feature-number">01</span><span className="feature-label">{t.skills.featureLabel}</span><h3>{t.skills.h3a}<br/><em>{t.skills.h3em}</em></h3><p>{t.skills.featureP}</p><a href="#experience" className="text-link">{t.skills.featureLink} <ArrowUpRight size={15}/></a></div><div className="skill-list reveal">{skills.map((skill, i) => <div className="skill-row" key={skill}><span className="skill-count">{String(i + 1).padStart(2, "0")}</span><span>{skill}</span><Check className="skill-check" size={15}/></div>)}</div></div></div></section>

      <section id="projects" className="section projects-section"><div className="section-wrap"><div className="section-heading reveal"><div><p className="section-kicker">{t.work.kicker}</p><h2>{t.work.h2}</h2></div><p className="heading-aside">{t.work.aside}</p></div><div className="project-list">{t.work.items.map((project, i) => <article className="project-row reveal" key={project.title}><div className="project-index">0{i + 1}</div><div className="project-main"><div className="project-meta"><span>{project.org}</span><span className="meta-dot"/>{project.date}</div><h3>{project.title}</h3><p>{project.desc}</p><div className="project-tags">{project.tags.map((tag) => <Badge variant="outline" key={tag}>{tag}</Badge>)}</div></div><span className="project-type">{project.type}</span><ArrowUpRight className="project-arrow" size={19}/></article>)}</div></div></section>

      <section id="experience" className="section experience-section"><div className="section-wrap"><div className="section-heading reveal"><div><p className="section-kicker">{t.experience.kicker}</p><h2>{t.experience.h2}</h2></div><p className="heading-aside">{t.experience.aside}</p></div><div className="experience-list">{t.experience.items.map((job, i) => <article className="experience-item reveal" key={job.date}><div className="experience-date">{job.date} <span>0{i + 1}</span></div><div className="experience-detail"><h3>{job.role}</h3><p className="experience-company">{job.company}</p><ul>{job.bullets.map((b) => <li key={b}>{b}</li>)}</ul></div></article>)}</div></div></section>

      <section id="contact" className="contact-section"><div className="section-wrap contact-wrap reveal"><div><p className="section-kicker">{t.contact.kicker}</p><h2>{t.contact.h2a}<br/>{t.contact.h2b} <em>{t.contact.h2em}</em></h2><p className="contact-lede">{t.contact.lede}</p></div><div className="contact-links"><a href="mailto:adilaramadhan25@gmail.com"><span className="contact-icon"><Mail size={17}/></span><span><small>EMAIL</small><strong>adilaramadhan25@gmail.com</strong></span><ArrowUpRight size={17}/></a><a href="https://github.com/adilaramadhan" target="_blank" rel="noreferrer"><span className="contact-icon"><GithubIcon size={17}/></span><span><small>GITHUB</small><strong>github.com/adilaramadhan</strong></span><ArrowUpRight size={17}/></a><a href="https://linkedin.com/in/adila-ramadhan-a3549a40b/" target="_blank" rel="noreferrer"><span className="contact-icon"><LinkedinIcon size={17}/></span><span><small>LINKEDIN</small><strong>Adila Ramadhan</strong></span><ArrowUpRight size={17}/></a></div></div></section>
    </main>
    <footer className="site-footer"><a href="#home" className="footer-brand">ADILA<span>.QA</span></a><span>{t.footer.rights}</span><a href="#home" className="back-top">{t.footer.backTop} <ChevronUp size={14}/></a></footer>
    {cvOpen && <div className="cv-overlay" role="dialog" aria-modal="true" aria-label="Curriculum Vitae" onClick={() => setCvOpen(false)}><div className="cv-panel" onClick={(e) => e.stopPropagation()}><div className="cv-head"><div><strong>Curriculum Vitae</strong><small>PDF · Adila Ramadhan</small></div><div className="cv-actions"><a href={CV_URL} target="_blank" rel="noreferrer"><Eye size={15}/> Open in new tab</a><a href={CV_URL} download><Download size={15}/> Download PDF</a><button type="button" onClick={() => setCvOpen(false)} aria-label="Close CV preview"><X size={16}/></button></div></div><iframe src={CV_URL} title="Curriculum Vitae"/></div></div>}
   </>;
 }
