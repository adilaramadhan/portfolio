import type { MetadataRoute } from "next";

const SITE_URL = "https://AdilaRamadhan.my.id/portofolio";

export const dynamic = "force-static";

export default function sitemap(): MetadataRoute.Sitemap {
  return [
    {
      url: SITE_URL,
      lastModified: new Date("2026-11-22"),
      changeFrequency: "monthly",
      priority: 1,
    },
  ];
}
