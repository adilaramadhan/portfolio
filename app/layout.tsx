import type { Metadata } from "next";
import { Geist, Geist_Mono } from "next/font/google";
import "./globals.css";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

// ponytail: production URL dup of repo name — update here when GitHub username/repo changes
const SITE = "https://AdilaRamadhan.my.id";
const SITE_URL = `${SITE}/portofolio`;

export const metadata: Metadata = {
  metadataBase: new URL(SITE_URL),
  title: {
    default: "Adila Ramadhan — QA Engineer | Test Automation & Manual Testing",
    template: "%s | Adila Ramadhan",
  },
  description:
    "QA Engineer specializing in manual testing, API validation, mobile & web test automation (Playwright), and performance testing. Portfolio, projects, and CV of Adila Ramadhan. Open to QA opportunities.",
  keywords: [
    "Adila Ramadhan",
    "QA Engineer",
    "Quality Assurance",
    "Software Tester",
    "Test Automation",
    "Playwright",
    "Manual Testing",
    "API Testing",
    "Mobile Testing",
    "Performance Testing",
  ],
  authors: [{ name: "Adila Ramadhan", url: SITE_URL }],
  creator: "Adila Ramadhan",
  openGraph: {
    type: "website",
    url: SITE_URL,
    siteName: "Adila Ramadhan — QA Engineer",
    title: "Adila Ramadhan — QA Engineer | Test Automation & Manual Testing",
    description:
      "QA Engineer specializing in manual testing, API validation, mobile & web test automation (Playwright), and performance testing. Open to QA opportunities.",
    locale: "en_US",
    alternateLocale: "id_ID",
    images: [{ url: `${SITE_URL}/assets/profile.webp`, width: 512, height: 512, alt: "Adila Ramadhan — QA Engineer" }],
  },
  twitter: {
    card: "summary",
    title: "Adila Ramadhan — QA Engineer",
    description: "QA Engineer: manual, API, mobile & web automation (Playwright), performance testing. Open to opportunities.",
    images: [`${SITE_URL}/assets/profile.webp`],
  },
  robots: { index: true, follow: true },
  alternates: { canonical: SITE_URL },
};

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html
      lang="en"
      className={`${geistSans.variable} ${geistMono.variable} h-full antialiased`}
    >
      <body className="min-h-full flex flex-col">
        {children}
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{
            __html: JSON.stringify({
              "@context": "https://schema.org",
              "@type": "Person",
              name: "Adila Ramadhan",
              url: SITE_URL,
              jobTitle: "QA Engineer",
              image: `${SITE_URL}/assets/profile.webp`,
              email: "mailto:adilaramadhan25@gmail.com",
              sameAs: [
                "https://github.com/adilaramadhan",
                "https://linkedin.com/in/adila-ramadhan-a3549a40b/",
              ],
              knowsAbout: ["Manual Testing", "API Testing", "Test Automation", "Playwright", "Performance Testing", "SQL"],
            }),
          }}
        />
      </body>
    </html>
  );
}
