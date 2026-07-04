# TUMSDA Church Website Refactor — Progress & Handoff

**Status:** ✅ Phase 1 Complete | 🔄 Phase 2–4 Ready for Implementation

---

## ✅ Completed (Committed to `main`)

### 1. **Header/Footer Extraction**
- ✅ `header.php` — shared navigation, mobile side-panel, sticky navbar
- ✅ `footer.php` — unified footer, seven-section branding, all popups (support, mission chair, gallery, contact)
- ✅ Both use **relative asset paths** (`assets/...` not `/TUMSDA/...`)

### 2. **Page Conversion to Shared Template**
- ✅ `index.php` — homepage with hero carousel
- ✅ `about.php` — about, mission/vision, history, beliefs, weekly meetings, calendar
- ✅ `departments.php` — department cards with descriptions
- ✅ `evangelism.php` — mission accordion and details
- ✅ `sermons.php` — featured & playlist sermon embeds
- ✅ `ministries.php` — ministry descriptions
- ✅ `leadership.php` — leadership cards + contact form (Formspree placeholder)

**All 7 pages now:**
- Use `<?php $currentPage = basename($_SERVER['PHP_SELF']); include 'header.php'; ?>`
- Use `<?php include 'footer.php'; ?>` closing tag
- Have **relative asset paths** throughout

### 3. **Absolute Path Cleanup**
- ✅ Removed `index.html` (redundant, used old `/TUMSDA/` paths)
- ✅ Verified all `.php` files use relative paths

---

## 🔄 Remaining Work

### 2. **Image Optimization** (NOT STARTED)

**Current Status:** Images are large:
- `ChurchChoir.png` ~7.5MB
- `ALO.png` ~5.9MB
- `Sabbath.png` ~3.7MB
- Others: 1–3MB each

**Plan:**
1. Create `assets/img/original/` directory
2. Move oversized images there
3. Use ImageMagick or online converter (TinyPNG, Squoosh) to generate:
   - `.webp` (modern browsers, best compression)
   - `.jpg` or `.png` fallback (older browsers, email preview crawlers)
4. Update HTML with `<picture>` elements:
   ```html
   <picture>
     <source type="image/webp" srcset="assets/img/Sabbath.webp">
     <img src="assets/img/Sabbath.jpg" alt="Worship" class="d-block w-100">
   </picture>
   ```
5. Update all image references in:
   - `index.php` (carousel: 4 images)
   - `about.php` (hero: 1 image)
   - `departments.php` (department images)
   - `footer.php` (logos, icon, popup till image)

**Expected Impact:** Page load ~30–50% faster, mobile bandwidth reduced

---

### 3. **Consistent Styling Across Pages** (NOT STARTED)

**Current State:**
- Homepage (`index.php`) has polished hero section, styled sections, cards, accordions
- Other pages exist but styling consistency not verified

**Checklist:**
1. ✅ Navigate to each page locally: `php -S localhost:8000`
   - ✅ `index.php` (home)
   - ✅ `about.php`
   - ✅ `departments.php`
   - ✅ `evangelism.php`
   - ✅ `sermons.php`
   - ✅ `ministries.php`
   - ✅ `leadership.php`

2. Visual comparison:
   - Card styling consistent across all pages?
   - Accordion styles match?
   - Form inputs (in leadership.php contact) match homepage style?
   - Tables (in about.php) are readable and consistent?

3. Responsive check:
   - Mobile viewport (375px, 768px, 1024px)
   - Side-panel menu opens/closes?
   - Navbar collapses properly?

4. Fix any inconsistencies in `assets/style.css`

---

### 4. **Real Formspree Integration** (QUICK FIX)

**Current:** `leadership.php` line 84 has placeholder:
```php
<form method="post" action="https://formspree.io/f/{YOUR_FORM_ID}" ...>
  <!-- Replace {YOUR_FORM_ID} with your actual Formspree form ID -->
```

**Steps:**
1. Go to https://formspree.io
2. Sign up / log in
3. Create a new form, name it "TUMSDA Contact"
4. Copy the form ID (format: `abc123def456`)
5. Replace `{YOUR_FORM_ID}` with the real ID in `leadership.php`
6. Test: fill form, submit, confirm email arrives

**Alternative:** Use Web3Forms (https://web3forms.com) instead if Formspree blocks you.

---

### 5. **Functional Testing** (CRITICAL BEFORE DEPLOYMENT)

**Browser Test Suite (localhost:8000):**

| Feature | Pages | Expected |
|---------|-------|----------|
| **Navigation** | All | All 6 links work, active link highlights |
| **Hero Carousel** | index.php | Auto-rotates, manual prev/next, swipe on mobile |
| **Popups** | footer.php buttons | Support/Mission/Gallery/Contact open & close |
| **Mobile Menu** | All | Hamburger icon appears <1024px, side-panel opens/closes |
| **Forms** | leadership.php | Contact form submits to Formspree, no errors |
| **External Links** | All | YouTube, WhatsApp, Adventist.org links open correctly |
| **Images Load** | All | All carousel, hero, department, leader photos appear |
| **CSS Loads** | All | No styling broken, fonts render correctly |
| **Mobile Layout** | All | Readable at 375px, 768px, 1024px, 1440px |

---

## Quick Start Guide

### Local Testing
```bash
cd /path/to/tumsdachurch
php -S localhost:8000
# Open http://localhost:8000/index.php in browser
```

### File Structure
```
tumsdachurch/
├── header.php          # Shared top (nav, head, body open)
├── footer.php          # Shared bottom (footer, popups, body close)
├── index.php           # Homepage
├── about.php
├── departments.php
├── evangelism.php
├── sermons.php
├── ministries.php
├── leadership.php      # Has contact form
└── assets/
    ├── css/
    │   ├── style.css
    │   ├── bootstrap.min.css
    │   └── all.min.css
    ├── img/
    │   ├── original/    # (TO CREATE for optimized images)
    │   ├── favicon.png
    │   ├── logo.jpg
    │   ├── [all carousel/hero images]
    │   └── ...
    ├── js/
    │   ├── main.js
    │   └── bootstrap.bundle.min.js
    └── ...
```

---

## Deployment Checklist

Before pushing to production:

- [ ] Images optimized (webp + fallback)
- [ ] All 7 pages tested locally (no 404, all styles applied)
- [ ] Carousels/popups/menus work on mobile & desktop
- [ ] Contact form connected to real Formspree ID, tested submission
- [ ] No console errors (F12 → Console tab)
- [ ] Lighthouse score >80 (if checked)
- [ ] All external links open correctly
- [ ] No trailing `index.html` references in code

---

## Notes for Next Collaborator

1. **This is a feature-branch-ready refactor** — if starting over, create a branch (`git checkout -b feature/optimization`) before making changes
2. **Asset paths are relative** — server must be at root of `tumsdachurch/` directory
3. **No external CDN issues expected** — Bootstrap, Font Awesome, Google Fonts all HTTPS
4. **PHP version:** Assumes PHP 7.2+ (for `$_SERVER` globals, `include` statements)
5. **No database** — all content is static HTML/PHP, no `.env` or config files needed
6. **Existing data intact** — all page content, calendar events, leadership bios preserved

---

**Last Updated:** 2026-07-04 (after index.html removal & path cleanup)
