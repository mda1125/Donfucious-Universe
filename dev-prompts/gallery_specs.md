# Gallery_Specs.md

## Project: Donfucious.com
## Feature: Gallery of Greatness

---

## Objective

Create a **Gallery Section** on the homepage to showcase Donfucious Universe images (posters, hats, memes, stickers, fake campaign merch).  
Visitors can view the gallery from the homepage navigation and see individual image cards with short, funny descriptions.

---

## Requirements

### 1. New Section on Homepage

- Add a new `<section id="gallery">` underneath the current Quotes section but before the Footer.
- Section Title:  
  **Gallery of Greatness**
- Subtext (optional small font under title):  
  *"Visual proof that history is already thanking Donfucious."*

---

### 2. Gallery Layout

- Flexbox layout
- 3 items per row on desktop
- 1–2 items per row on mobile
- Each item consists of:
  - Thumbnail Image (280px wide max)
  - Short Caption below each image
- Images should automatically resize and stay neatly aligned.

---

### 3. Linking in Navigation

- Add a navigation link/button that says **"Gallery"**
- Clicking the "Gallery" link scrolls smoothly to the `#gallery` section.
- Add the link right next to "Meet Donfucious" if possible.

Example:

```html
<nav>
  <a href="#about" class="scroll-link">Meet Donfucious</a>
  <a href="#gallery" class="scroll-link">Gallery</a>
</nav>
