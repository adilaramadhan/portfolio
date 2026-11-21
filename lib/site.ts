import { BASE_PATH } from "./i18n";

// ponytail: single source of truth for absolute URLs — override per host via env (GitHub Pages sets both)
export const SITE_URL = `${process.env.NEXT_PUBLIC_SITE_URL ?? "https://www.adilaramadhan.my.id"}${BASE_PATH}`;
