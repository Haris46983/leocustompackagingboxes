<?php
$city_title = isset($data['name']) && trim($data['name']) !== '' ? trim($data['name']) : 'Custom Boxes in California';
$city_name = trim(preg_replace('/^Custom Boxes in\\s+/i', '', $city_title));
if ($city_name === '') {
    $city_name = 'California';
}

$page_products = isset($sub) && is_array($sub) ? array_slice($sub, 0, 6) : array();
$page_description = isset($data['description']) ? trim($data['description']) : '';
$bottom_description = isset($data['description_bottom']) ? trim($data['description_bottom']) : '';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
/* City landing page: styles are scoped so the shared site header and footer remain unchanged. */
.city-page {
    --city-navy: #071b3a;
    --city-navy-2: #0c2d5a;
    --city-gold: #e3a017;
    --city-gold-dark: #bf7d08;
    --city-ink: #16233a;
    --city-copy: #536076;
    --city-line: #e5eaf1;
    --city-soft: #f7f9fc;
    --city-white: #fff;
    color: var(--city-ink);
    background: var(--city-soft);
    font-family: inter, Arial, sans-serif;
}

.city-page *,
.city-page *::before,
.city-page *::after {
    box-sizing: border-box;
}

.city-page a {
    transition: color .2s ease, background-color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
}

.city-shell {
    width: calc(100% - 40px) !important;
    max-width: 1240px !important;
    margin: 0 auto !important;
    padding: 0 !important;
    /* position: relative; */
    float: none !important;
    clear: both;
}


.city-hero__inner {
    min-height: 445px;
    padding: 44px 20px 48px !important;
}

.city-page {
    width: 100%;
    overflow-x: hidden; 
}

main.city-page {
    /* display: block !important; */
width: 100% !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 0 !important;
    display: block !important;


}

.city-card {
    background: var(--city-white);
    border: 1px solid var(--city-line);
    border-radius: 12px;
    box-shadow: 0 5px 18px rgba(7, 27, 58, .035);
}

.city-section-title {
    margin: 0 0 20px;
    color: var(--city-navy);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: .04em;
    line-height: 1.25;
    text-transform: uppercase;
}

.city-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    min-height: 46px;
    padding: 11px 22px;
    border: 1px solid transparent;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.2;
    text-decoration: none;
}

.city-button i {
    font-size: 13px;
}

.city-button--gold {
    color: #fff;
    background: var(--city-gold);
    border-color: var(--city-gold);
}

.city-button--gold:hover,
.city-button--gold:focus {
    color: #fff;
    background: var(--city-gold-dark);
    border-color: var(--city-gold-dark);
    transform: translateY(-1px);
    box-shadow: 0 7px 16px rgba(191, 125, 8, .22);
}

.city-button--navy {
    color: #fff;
    background: var(--city-navy);
    border-color: var(--city-navy);
}

.city-button--navy:hover,
.city-button--navy:focus {
    color: #fff;
    background: var(--city-navy-2);
    border-color: var(--city-navy-2);
}

.city-button--outline {
    color: var(--city-navy);
    background: rgba(255, 255, 255, .9);
    border-color: var(--city-navy);
}

.city-button--outline:hover,
.city-button--outline:focus {
    color: #fff;
    background: var(--city-navy);
}

/* Hero */
.city-hero {
    position: relative;
    isolation: isolate;
    min-height: 445px;
    overflow: hidden;
    background-color: var(--city-navy);
    background-image: url('https://images.unsplash.com/photo-1449034446853-66c86144b0ad?q=80&w=1920&auto=format&fit=crop');
    background-position: center;
    background-size: cover;
}

.city-hero::before {
    position: absolute;
    z-index: -1;
    inset: 0;
    content: '';
    background: linear-gradient(90deg, rgba(255, 255, 255, .98) 0%, rgba(255, 255, 255, .94) 35%, rgba(255, 255, 255, .62) 54%, rgba(255, 255, 255, .07) 78%);
}

.city-hero__inner {
    position: relative;
    min-height: 445px;
    padding: 44px 0 48px;
}

.city-hero__content {
    width: min(680px, 65%);
}

.city-breadcrumbs {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 7px;
    margin: 0 0 14px;
    color: #5b6878;
    font-size: 12px;
    line-height: 1.4;
}

.city-breadcrumbs a {
    color: inherit;
    text-decoration: none;
}

.city-breadcrumbs a:hover {
    color: var(--city-gold-dark);
}

.city-breadcrumbs .city-current {
    color: var(--city-navy);
    font-weight: 700;
}

.city-breadcrumbs .city-divider {
    color: #9da7b5;
}

.city-hero h1 {
    max-width: 630px;
    margin: 0 0 13px;
    color: var(--city-navy);
    font-size: clamp(37px, 4.5vw, 61px);
    font-weight: 800;
    letter-spacing: -.045em;
    line-height: 1.04;
}

.city-hero h1 span {
    display: block;
    color: var(--city-gold);
}

.city-hero__lead {
    max-width: 560px;
    margin: 0;
    color: #34445a;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.65;
}

.city-hero__benefits {
    display: flex;
    flex-wrap: wrap;
    gap: 9px 22px;
    margin: 20px 0 22px;
}

.city-hero__benefit {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: var(--city-navy);
    font-size: 13px;
    font-weight: 600;
}

.city-hero__benefit i {
    color: var(--city-gold);
    font-size: 15px;
}

.city-hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.city-service-badge {
    position: absolute;
    right: 0;
    bottom: 32px;
    width: min(250px, 25%);
    padding: 20px 22px;
    color: #fff;
    background: rgba(6, 27, 59, .95);
    border: 1px solid rgba(255, 255, 255, .22);
    border-radius: 10px;
    box-shadow: 0 16px 34px rgba(7, 27, 58, .27);
}

.city-service-badge > i {
    display: block;
    margin-bottom: 5px;
    color: var(--city-gold);
    font-size: 23px;
}

.city-service-badge span {
    display: block;
}

.city-service-badge__eyebrow {
    margin-bottom: 2px;
    font-size: 12px;
    font-weight: 600;
}

.city-service-badge__city {
    color: var(--city-gold);
    font-size: 22px;
    font-weight: 800;
    line-height: 1.14;
}

.city-service-badge__copy {
    margin-top: 5px;
    font-size: 12px;
    line-height: 1.45;
}

/* Intro and overview */
.city-content {
    padding: 24px 0 40px;
}

.city-ai-summary {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 16px;
    align-items: center;
    padding: 17px 20px;
    background: linear-gradient(100deg, #fbfdff, #f4f7fc);
}

.city-ai-summary__icon {
    display: grid;
    width: 38px;
    height: 38px;
    place-items: center;
    color: var(--city-navy-2);
    background: #e9f0fb;
    border-radius: 50%;
    font-size: 18px;
}

.city-ai-summary__title {
    display: block;
    margin-bottom: 3px;
    color: var(--city-navy);
    font-size: 13px;
    font-weight: 800;
    letter-spacing: .04em;
}

.city-ai-summary p {
    margin: 0;
    color: #40516a;
    font-size: 13px;
    line-height: 1.55;
}

.city-overview {
    display: grid;
    grid-template-columns: 1.05fr 1.05fr 1fr;
    gap: 14px;
    margin-top: 14px;
}

.city-overview__card {
    min-height: 220px;
    padding: 22px;
}

.city-overview__card p {
    margin: 0;
    color: var(--city-copy);
    font-size: 13px;
    line-height: 1.75;
}

.city-overview__card p + p {
    margin-top: 11px;
}

.city-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 15px;
    color: var(--city-gold-dark);
    font-size: 12px;
    font-weight: 800;
    text-decoration: none;
}

.city-link:hover {
    color: var(--city-navy-2);
}

.city-highlights {
    display: grid;
    gap: 16px;
}

.city-highlight {
   display: flex;          /* Grid ki jagah flex behtar hai yahan */
    align-items: flex-start; /* Text agar lamba ho toh icon top par hi rahay */
    gap: 12px;
    margin-bottom: 16px;    /* Har highlight ke darmiyan gap */
}

.city-highlight > div {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.city-highlight__icon {
    display: flex;          /* Grid ki jagah Flex use karein */
    align-items: center;    /* Vertically center */
    justify-content: center; /* Horizontally center */
    width: 36px;            /* Thora size bara kiya hai behtar look ke liye */
    height: 36px;
    flex-shrink: 0;         /* Box ko pichakne se rokne ke liye */
    color: var(--city-navy-2);
    background: #f0f4fa;
    border-radius: 8px;
    font-size: 16px;        /* Icon ka size */

 display: flex !important;       /* Flexbox enable karein */
    align-items: center !important;    /* Vertically center */
    justify-content: center !important; /* Horizontally center */
    width: 35px;                    /* Box ka width */
    height: 35px;                   /* Box ka height */
    background: #f0f4fa;            /* Light blue background */
    border-radius: 8px;             /* Round corners */
    color: #0c2d5a;                 /* Icon color (navy) */
    flex-shrink: 0;                 /* Box ko chota hone se rokne ke liye */
    overflow: hidden;
}

.city-highlight__icon i {
    display: block !important;
    line-height: 0 !important;      /* Icon ki apni extra space khatam karne ke liye */
    font-size: 16px;                /* Icon ka size */
    margin: 0 !important;           /* Kisi bhi kism ka margin khatam */
}

.city-highlight strong,
.city-highlight span {
    display: block;
}

.city-highlight strong {
    margin-bottom: 2px;
    color: var(--city-navy);
    font-size: 13px;
    line-height: 1.25;
}

.city-highlight span {
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.45;
}

/* Industries and products */
.city-block {
    margin-top: 14px;
    padding: 22px;
}

.city-industries {
    display: grid;
    grid-template-columns: repeat(9, 1fr);
}

.city-industry {
    display: grid;
    min-height: 75px;
    place-items: center;
    padding: 3px 10px;
    color: var(--city-navy);
    border-right: 1px solid var(--city-line);
    text-align: center;
}

.city-industry:last-child {
    border-right: 0;
}

.city-industry i {
    margin-bottom: 7px;
    color: var(--city-gold-dark);
    font-size: 21px;
}

.city-industry span {
    font-size: 11px;
    font-weight: 700;
    line-height: 1.25;
}

.city-product-row {
    display: flex;
    align-items: stretch;
    gap: 18px;
}

.city-products {
    display: grid;
    flex: 1;
    grid-template-columns: repeat(6, minmax(90px, 1fr));
}

.city-product {
    display: grid;
    grid-template-rows: 82px auto;
    align-items: center;
    min-width: 0;
    padding: 0 10px 5px;
    color: var(--city-navy);
    border-right: 1px solid var(--city-line);
    text-align: center;
    text-decoration: none;
}

.city-product:last-child {
    border-right: 0;
}

.city-product__image {
    display: grid;
    width: 100%;
    height: 76px;
    place-items: center;
}

.city-product__image img {
    width: auto;
    max-width: 100%;
    height: 72px;
    max-height: 100%;
    object-fit: contain;
    mix-blend-mode: multiply;
}

.city-product span {
    display: block;
    overflow: hidden;
    font-size: 11px;
    font-weight: 700;
    line-height: 1.3;
    text-overflow: ellipsis;
}

.city-product:hover img {
    transform: translateY(-3px);
}

.city-product-row .city-button {
    align-self: center;
    min-width: 165px;
}

.city-empty-products {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 82px;
    color: var(--city-copy);
    font-size: 13px;
}

.city-empty-products i {
    color: var(--city-gold);
    font-size: 24px;
}

/* Supporting cards */
.city-two-column {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-top: 14px;
}

.city-materials,
.city-areas,
.city-why,
.city-stats {
    padding: 22px;
}

.city-material-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
}

.city-material-heading {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
    color: var(--city-navy);
    font-size: 12px;
    font-weight: 800;
}

.city-material-heading i {
    color: var(--city-gold-dark);
    font-size: 15px;
}

.city-material-grid ul {
    display: grid;
    gap: 5px;
    margin: 0;
    padding: 0;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.35;
    list-style: none;
}

.city-areas__list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px 16px;
}

.city-area {
    display: flex;
    align-items: flex-start;
    gap: 7px;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.35;
}

.city-area i {
    margin-top: 2px;
    color: var(--city-gold-dark);
    font-size: 12px;
}

.city-card__footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 18px;
}

.city-card__footer .city-button {
    min-height: 39px;
    padding: 9px 18px;
    font-size: 12px;
}

.city-why__body {
    display: grid;
    grid-template-columns: 1fr 120px;
    gap: 18px;
    align-items: center;
}

.city-why__body p {
    margin: 0;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.7;
}

.city-why__body p + p {
    margin-top: 10px;
}

.city-why__graphic {
    position: relative;
    display: grid;
    width: 105px;
    height: 132px;
    place-items: center;
    color: #fff;
    background: linear-gradient(145deg, #163d75, #061a39);
    border-radius: 8px 8px 12px 12px;
    box-shadow: 9px 9px 0 #d9e1eb;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -.05em;
}

.city-why__graphic::before {
    position: absolute;
    top: -12px;
    left: 0;
    width: 100%;
    height: 15px;
    content: '';
    background: #245095;
    border-radius: 5px 5px 0 0;
    transform: skewY(-7deg);
    transform-origin: left bottom;
}

.city-why__graphic small {
    position: absolute;
    bottom: 24px;
    font-size: 8px;
    font-weight: 600;
    letter-spacing: .1em;
}

.city-stats__grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 8px;
    text-align: center;
}

.city-stat {
    display: grid;
    gap: 5px;
    align-content: start;
    justify-items: center;
}

.city-stat i {
    display: grid;
    width: 36px;
    height: 36px;
    place-items: center;
    color: var(--city-gold-dark);
    background: #fbf5e8;
    border-radius: 50%;
    font-size: 16px;
}

.city-stat strong {
    color: var(--city-navy);
    font-size: 15px;
    line-height: 1.2;
}

.city-stat span {
    color: var(--city-copy);
    font-size: 10px;
    line-height: 1.25;
}

/* Bottom conversion area */
.city-conversion-grid {
    display: grid;
    grid-template-columns: 1.12fr .88fr;
    gap: 14px;
    margin-top: 14px;
}

.city-compare,
.city-order,
.city-faq,
.city-trust,
.city-quote {
    padding: 22px;
}

.city-benefit-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 9px 17px;
    margin: -3px 0 15px;
    color: var(--city-navy);
    font-size: 11px;
    font-weight: 700;
}

.city-benefit-bar span {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.city-benefit-bar i {
    color: var(--city-gold-dark);
}

.city-table-wrap {
    overflow-x: auto;
}

.city-table {
    width: 100%;
    min-width: 510px;
    border-collapse: collapse;
    color: #42516a;
    font-size: 11px;
    text-align: center;
}

.city-table th,
.city-table td {
    padding: 8px 9px;
    border: 1px solid var(--city-line);
}

.city-table th {
    color: var(--city-navy);
    background: #f4f7fb;
    font-weight: 800;
}

.city-table td:first-child {
    color: var(--city-ink);
    font-weight: 600;
    text-align: left;
}

.city-table .city-table__highlight {
    color: #fff;
    background: var(--city-gold);
    font-weight: 700;
}

.city-order__steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 4px;
}

.city-step {
    position: relative;
    display: grid;
    gap: 5px;
    justify-items: center;
    padding: 0 4px;
    text-align: center;
}

.city-step:not(:last-child)::after {
    position: absolute;
    top: 21px;
    right: -8px;
    color: #c6ced9;
    content: '\\2192';
    font-size: 16px;
}

.city-step__icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 42px;
    height: 42px;
    background: #f0f4fa;
    border-radius: 50%;
    margin: 0 auto; /* Horizontal centering */
}

.city-step__icon i {
    line-height: 0 !important;
    font-size: 17px;
    display: block;
}

/* Arrow fix: Jo \2192 likha aa raha hai usko real arrow banane ke liye */
.city-step:not(:last-child)::after {
    position: absolute;
    top: 20px; /* Icon ke bilkul samne */
    right: -10px;
    color: #c6ced9;
    content: "\2192" !important; /* Single backslash use karein */
    font-size: 20px;
    font-weight: bold;
}

/* Numbers (1, 2, 3) ko icon ke neechay center karne ke liye */
.city-step b {
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: 18px;
    height: 18px;
    margin: -10px auto 5px; /* Icon ke thora upar charhane ke liye */
    position: relative;
    z-index: 2;
    background: var(--city-gold);
    color: #fff;
    border-radius: 50%;
    font-size: 10px;
}

.city-step b {
    display: grid;
    width: 18px;
    height: 18px;
    place-items: center;
    color: #fff;
    background: var(--city-gold);
    border-radius: 50%;
    font-size: 10px;
}

.city-step strong {
    color: var(--city-navy);
    font-size: 11px;
    line-height: 1.2;
}

.city-step span {
    color: var(--city-copy);
    font-size: 10px;
    line-height: 1.3;
}

.city-faq-trust {
    display: grid;
    grid-template-columns: 1.18fr .82fr;
    gap: 14px;
    margin-top: 14px;
}

.city-faq details {
    border-bottom: 1px solid var(--city-line);
}

.city-faq details:last-child {
    border-bottom: 0;
}

.city-faq summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    padding: 10px 0;
    color: var(--city-navy);
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
    list-style: none;
}

.city-faq summary::-webkit-details-marker {
    display: none;
}

.city-faq summary::after {
    color: var(--city-gold-dark);
    content: '+';
    font-size: 18px;
    font-weight: 500;
}

.city-faq details[open] summary::after {
    content: '\\2212';
}

.city-faq p {
    margin: 0 0 10px;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.55;
}

.city-trust__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px 8px;
    text-align: center;
}

.city-trust-item i {
    display: block;
    margin-bottom: 5px;
    color: var(--city-gold-dark);
    font-size: 22px;
}

.city-trust-item strong,
.city-trust-item span {
    display: block;
}

.city-trust-item strong {
    color: var(--city-navy);
    font-size: 14px;
}

.city-trust-item span {
    margin-top: 2px;
    color: var(--city-copy);
    font-size: 10px;
    line-height: 1.25;
}

.city-quote {
    margin-top: 14px;
    background: linear-gradient(120deg, #fffdf8 0%, #fff6e5 100%);
    border-color: #f4dfb5;
}

.city-quote .alert {
    margin-bottom: 14px;
}

.city-quote__form-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.city-quote input,
.city-quote select,
.city-quote textarea {
    width: 100%;
    min-height: 42px;
    padding: 10px 12px;
    color: var(--city-ink);
    background: #fff;
    border: 1px solid #dfe5ed;
    border-radius: 5px;
    font-family: inherit;
    font-size: 12px;
    outline: 0;
}

.city-quote textarea {
    display: block;
    min-height: 80px;
    margin-top: 10px;
    resize: vertical;
}

.city-quote input:focus,
.city-quote select:focus,
.city-quote textarea:focus {
    border-color: var(--city-gold);
    box-shadow: 0 0 0 3px rgba(227, 160, 23, .15);
}

.city-quote__footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 14px;
    margin-top: 12px;
}

.city-quote__privacy {
    color: #657087;
    font-size: 11px;
}

.city-quote__privacy i {
    margin-right: 5px;
    color: var(--city-navy);
}

.city-editorial {
    margin-top: 14px;
    padding: 24px;
}

.city-editorial h2,
.city-editorial h3 {
    color: var(--city-navy);
}

.city-editorial h2 {
    margin: 0 0 14px;
    font-size: 22px;
}

.city-editorial h3 {
    margin: 18px 0 9px;
    font-size: 17px;
}

.city-editorial p,
.city-editorial li {
    color: var(--city-copy);
    font-size: 13px;
    line-height: 1.75;
}

.city-editorial p:last-child {
    margin-bottom: 0;
}

@media (max-width: 1100px) {
    .city-hero__content {
        width: 70%;
    }

    .city-service-badge {
        right: 16px;
        width: 225px;
    }

    .city-industries {
        grid-template-columns: repeat(5, 1fr);
        gap: 14px 0;
    }

    .city-industry:nth-child(5) {
        border-right: 0;
    }

    .city-product-row {
        display: block;
    }

    .city-products {
        grid-template-columns: repeat(3, 1fr);
        gap: 15px 0;
    }

    .city-product:nth-child(3n) {
        border-right: 0;
    }

    .city-product-row .city-button {
        margin-top: 18px;
    }
}

@media (max-width: 860px) {
    .city-hero,
    .city-hero__inner {
        min-height: 500px;
    }

    .city-hero::before {
        background: linear-gradient(90deg, rgba(255, 255, 255, .97) 0%, rgba(255, 255, 255, .93) 57%, rgba(255, 255, 255, .34) 100%);
    }

    .city-hero__content {
        width: 74%;
    }

    .city-overview,
    .city-two-column,
    .city-conversion-grid {
        grid-template-columns: 1fr;
    }

    .city-overview__card {
        min-height: auto;
    }

    .city-faq-trust {
        grid-template-columns: 1fr;
    }

    .city-material-grid,
    .city-areas__list {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 640px) {
    .city-shell {
        width: min(100% - 24px, 1240px);
    }

    .city-hero,
    .city-hero__inner {
        min-height: auto;
    }

    .city-hero {
        background-position: 61% center;
    }

    .city-hero::before {
        background: rgba(255, 255, 255, .92);
    }

    .city-hero__inner {
        padding: 32px 0 190px;
    }

    .city-hero__content {
        width: 100%;
    }

    .city-hero h1 {
        font-size: 38px;
    }

    .city-hero__lead {
        font-size: 14px;
    }

    .city-hero__benefits {
        gap: 8px 16px;
    }

    .city-hero__benefit {
        font-size: 12px;
    }

    .city-hero__actions {
        display: grid;
        grid-template-columns: 1fr;
    }

    .city-service-badge {
        right: 0;
        bottom: 20px;
        left: 0;
        width: auto;
    }

    .city-content {
        padding: 14px 0 28px;
    }

    .city-ai-summary {
        grid-template-columns: 1fr;
        gap: 8px;
        padding: 16px;
    }

    .city-ai-summary__icon {
        width: 31px;
        height: 31px;
        font-size: 14px;
    }

    .city-block,
    .city-overview__card,
    .city-materials,
    .city-areas,
    .city-why,
    .city-stats,
    .city-compare,
    .city-order,
    .city-faq,
    .city-trust,
    .city-quote,
    .city-editorial {
        padding: 18px;
    }

    .city-industries {
        grid-template-columns: repeat(3, 1fr);
    }

    .city-industry,
    .city-industry:nth-child(5) {
        border-right: 1px solid var(--city-line);
    }

    .city-industry:nth-child(3n) {
        border-right: 0;
    }

    .city-product {
        padding-right: 7px;
        padding-left: 7px;
    }

    .city-product__image {
        height: 63px;
    }

    .city-product__image img {
        height: 58px;

    }

    .city-material-grid,
    .city-areas__list {
        grid-template-columns: repeat(2, 1fr);
    }

    .city-why__body {
        grid-template-columns: 1fr;
    }

    .city-why__graphic {
        justify-self: center;
    }

    .city-stats__grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 18px 8px;
    }

    .city-order__steps {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px 8px;
    }

    .city-step:not(:last-child)::after {
        display: none;
    }

    .city-quote__form-grid {
        grid-template-columns: 1fr;
    }
}



/* --- HELPFUL RESOURCES SECTION --- */
.city-resources-grid {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 10px 0;
    flex-wrap: wrap;
}

.city-resource-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 15px 10px;
    min-width: 140px;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.city-resource-item:hover {
    transform: translateY(-5px);
}

.city-resource-icon {
    width: 50px;
    height: 50px;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #f0f4fa;
    border-radius: 50%;
    margin-bottom: 12px;
    color: var(--city-gold-dark);
    font-size: 22px;
    border: 1px solid var(--city-line);
}

.city-resource-item span {
    color: var(--city-navy);
    font-size: 11px;
    font-weight: 700;
    line-height: 1.3;
    text-transform: uppercase;
    letter-spacing: 0.02em;
}

/* Vertical Divider Line */
.city-resource-divider {
    width: 1px;
    height: 50px;
    background-color: var(--city-line);
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .city-resource-divider {
        display: none; /* Mobile par lines hat jayengi */
    }
    .city-resources-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .city-resource-item {
        border-bottom: 1px solid var(--city-line);
    }
}


/* --- LOCAL PACKAGING INSIGHTS SECTION --- */
.city-insight-grid {
    display: grid;
    grid-template-columns: 1.2fr 2fr; /* Left text area thora chota, right icons area bara */
    gap: 30px;
    align-items: center;
}

.city-insight-text h2 {
    font-size: 14px;
    font-weight: 800;
    color: var(--city-navy);
    text-transform: uppercase;
    margin-bottom: 12px;
    letter-spacing: 0.03em;
}

.city-insight-text p {
    font-size: 13px;
    color: var(--city-copy);
    line-height: 1.6;
    margin: 0;
}

.city-insight-stats {
    display: flex;
    justify-content: space-between;
    align-items: stretch;
}

.city-insight-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 10px;
}

.city-insight-icon {
    font-size: 24px;
    color: var(--city-gold-dark);
    margin-bottom: 10px;
    height: 40px;
    display: flex !important;
    align-items: center;
    justify-content: center;
}

.city-insight-item strong {
    display: block;
    font-size: 11px;
    color: var(--city-navy);
    line-height: 1.3;
    font-weight: 700;
}

/* Vertical divider for insights */
.city-insight-sep {
    width: 1px;
    background: var(--city-line);
    margin: 10px 0;
}

/* Mobile Responsive */
@media (max-width: 992px) {
    .city-insight-grid {
        grid-template-columns: 1fr; /* Stack vertically on tablet/mobile */
        text-align: center;
    }
    .city-insight-stats {
        flex-wrap: wrap;
        gap: 20px;
    }
    .city-insight-sep {
        display: none;
    }
    .city-insight-item {
        min-width: 45%;
    }
}


/* --- PACKAGING QUICK FACTS SECTION --- */
.city-quick-facts-card {
    background: #fffbf2 !important; /* Light cream background */
    border: 1px solid #f4e8d1 !important;
    padding: 15px 10px !important;
    margin-top: 14px;
}

.city-facts-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 5px;
}

/* Left Title Block */
.city-facts-title {
    padding: 0 15px;
    border-right: 1.5px solid #e3d5ba;
    min-width: 130px;
}

.city-facts-title span {
    display: block;
    font-size: 11px;
    font-weight: 800;
    line-height: 1.2;
    text-transform: uppercase;
}

.city-facts-title .navy-text { color: var(--city-navy); }
.city-facts-title .gold-text { color: var(--city-gold); }

/* Individual Fact Item */
.city-fact-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 8px;
    border-right: 1px solid #eee4cf;
}

.city-fact-item:last-child {
    border-right: none;
}

.city-fact-item i {
    font-size: 16px;
    color: var(--city-navy);
    margin-bottom: 6px;
}

.city-fact-item strong {
    display: block;
    font-size: 9px;
    color: var(--city-navy);
    text-transform: uppercase;
    letter-spacing: 0.02em;
    margin-bottom: 2px;
}

.city-fact-item span {
    display: block;
    font-size: 10px;
    color: var(--city-copy);
    line-height: 1.2;
    font-weight: 500;
}

/* Responsive Fix */
@media (max-width: 1100px) {
    .city-facts-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }
    .city-facts-title {
        grid-column: span 3;
        border-right: none;
        border-bottom: 1px solid #e3d5ba;
        padding-bottom: 10px;
        text-align: center;
    }
    .city-fact-item:nth-child(3n+1) {
        border-right: none;
    }
}

@media (max-width: 600px) {
    .city-facts-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    .city-facts-title { grid-column: span 2; }
}


.city-resource-item span {
    color: var(--city-navy);
    font-size: 13px; /* Text thora bara kiya taake parhne mein asaan ho */
    font-weight: 700;
    line-height: 1.3;
    
    /* Pehle yahan 'uppercase' tha, ab 'capitalize' kar dein */
    text-transform: capitalize !important; 
    
    letter-spacing: normal; /* Small letters mein spacing ki zaroorat nahi hoti */
    display: block;
}




</style>

<main class="main city-page">
    <section class="city-hero">
        <div class="city-shell city-hero__inner">
            <div class="city-hero__content">
                <nav class="city-breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?=base_url();?>"><i class="fas fa-home"></i><span class="sr-only">Home</span></a>
                    <span class="city-divider">/</span>
                    <span>Locations</span>
                    <span class="city-divider">/</span>
                    <span class="city-current"><?=$city_title;?></span>
                </nav>

                <h1>Custom Boxes in <span><?=$city_name;?></span></h1>
                <p class="city-hero__lead">Premium custom packaging solutions for <?=$city_name;?> businesses. Build a stronger brand with exceptional print quality, flexible order quantities, and dependable delivery.</p>

                <div class="city-hero__benefits" aria-label="Our benefits">
                    <span class="city-hero__benefit"><i class="far fa-check-circle"></i>Low MOQ</span>
                    <span class="city-hero__benefit"><i class="fas fa-bolt"></i>Fast Turnaround</span>
                    <span class="city-hero__benefit"><i class="fas fa-palette"></i>Free Design Support</span>
                    <span class="city-hero__benefit"><i class="fas fa-truck"></i>Nationwide Shipping</span>
                </div>

                <div class="city-hero__actions">
                    <a class="city-button city-button--gold" href="#city-quote">Request a Quote <i class="fas fa-arrow-right"></i></a>
                    <a class="city-button city-button--outline" href="#city-products">View Products</a>
                </div>
            </div>

            <aside class="city-service-badge" aria-label="Service area">
                <i class="fas fa-map-marker-alt"></i>
                <span class="city-service-badge__eyebrow">Proudly serving</span>
                <span class="city-service-badge__city"><?=$city_name;?></span>
                <span class="city-service-badge__copy">&amp; surrounding areas</span>
            </aside>
        </div>
    </section>

    <div class="city-shell city-content">
        <section class="city-ai-summary city-card">
            <span class="city-ai-summary__icon"><i class="fa-brands fa-sith"></i></span>
            <div>
                <span class="city-ai-summary__title">Packaging For <?=$city_name;?></span>
                <p>Leo Custom Packaging Boxes helps <?=$city_name;?> brands create premium packaging with low minimums, free design support, custom printing, and reliable nationwide delivery.</p>
            </div>
        </section>



<!-- New Section HTMl -->

        <section class="city-block city-card">
    <h2 class="city-section-title" style="text-align: center; margin-bottom: 30px;">Helpful Resources / Packaging Guides</h2>
    
    <div class="city-resources-grid">
        <!-- Item 1 -->
        <a href="#" class="city-resource-item">
            <div class="city-resource-icon">
                <i class="fas fa-calculator"></i>
            </div>
            <span>Packaging Cost<br>Guide</span>
        </a>

        <div class="city-resource-grid"></div>

        <!-- Item 2 -->
        <a href="#" class="city-resource-item">
            <div class="city-resource-icon">
                <i class="fas fa-layer-group"></i>
            </div>
            <span>MOQ<br>Guide</span>
        </a>

        <div class="city-resource-grid"></div>

        <!-- Item 3 -->
        <a href="#" class="city-resource-item">
            <div class="city-resource-icon">
                <i class="fas fa-scroll"></i>
            </div>
            <span>Materials<br>Guide</span>
        </a>

        <div class="city-resource-grid"></div>

        <!-- Item 4 -->
        <a href="#" class="city-resource-item">
            <div class="city-resource-icon">
                <i class="fas fa-print"></i>
            </div>
            <span>Printing &<br>Finishing Guide</span>
        </a>

        <div class="city-resource-grid"></div>

        <!-- Item 5 -->
        <a href="#" class="city-resource-item">
            <div class="city-resource-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <span>Packaging<br>Statistics</span>
        </a>
    </div>
</section>







<!-- New Section 2 HTML -->

<section class="city-block city-card">
    <div class="city-insight-grid">
        <!-- Left Side: Text Content -->
        <div class="city-insight-text">
            <h2>Local Packaging Insights – <?=$city_name;?></h2>
            <p>
                <?=$city_name;?> is home to a wide range of industries including entertainment, fashion, beauty, health, food & beverage, and eCommerce. With a strong focus on branding and sustainability, businesses in <?=$city_name;?> are increasingly choosing custom packaging to create a premium unboxing experience and stand out in a competitive market. The demand for eco-friendly packaging solutions is growing rapidly as more brands adopt sustainable practices.
            </p>
        </div>

        <!-- Right Side: Icons & Stats -->
        <div class="city-insight-stats">
            <!-- Stat 1 -->
            <div class="city-insight-item">
                <div class="city-insight-icon"><i class="fas fa-leaf"></i></div>
                <strong>High Demand for<br>Sustainable Packaging</strong>
            </div>

            <div class="city-insight-sep"></div>

            <!-- Stat 2 -->
            <div class="city-insight-item">
                <div class="city-insight-icon"><i class="fas fa-shopping-basket"></i></div>
                <strong>Growing eCommerce<br>& DTC Brands</strong>
            </div>

            <div class="city-insight-sep"></div>

            <!-- Stat 3 -->
            <div class="city-insight-item">
                <div class="city-insight-icon"><i class="fas fa-gem"></i></div>
                <strong>Strong Retail<br>& Luxury Market</strong>
            </div>

            <div class="city-insight-sep"></div>

            <!-- Stat 4 -->
            <div class="city-insight-item">
                <div class="city-insight-icon"><i class="fas fa-rocket"></i></div>
                <strong>Fast Growing<br>Local Startups</strong>
            </div>
        </div>
    </div>
</section>






<!-- New Section 3 HTML -->

<section class="city-shell">
    <div class="city-quick-facts-card city-card">
        <div class="city-facts-wrapper">
            
            <!-- Left Header -->
            <div class="city-facts-title">
                <span class="navy-text">PACKAGING</span>
                <span class="gold-text">QUICK FACTS</span>
            </div>

            <!-- Fact 1 -->
            <div class="city-fact-item">
                <i class="fas fa-box"></i>
                <strong>MOQ</strong>
                <span>Low MOQ from 100 boxes</span>
            </div>

            <!-- Fact 2 -->
            <div class="city-fact-item">
                <i class="fas fa-stopwatch"></i>
                <strong>TURNAROUND</strong>
                <span>5-7 Business Days Delivery</span>
            </div>

            <!-- Fact 3 -->
            <div class="city-fact-item">
                <i class="fas fa-layer-group"></i>
                <strong>MATERIALS</strong>
                <span>Premium Quality & Eco-Friendly</span>
            </div>

            <!-- Fact 4 -->
            <div class="city-fact-item">
                <i class="fas fa-print"></i>
                <strong>PRINTING</strong>
                <span>High Quality Offset & Digital</span>
            </div>

            <!-- Fact 5 -->
            <div class="city-fact-item">
                <i class="fas fa-magic"></i>
                <strong>FINISHING</strong>
                <span>Gloss, Matte, Spot UV, Foil & More</span>
            </div>

            <!-- Fact 6 -->
            <div class="city-fact-item">
                <i class="fas fa-truck"></i>
                <strong>SHIPPING</strong>
                <span>Free Shipping Across USA</span>
            </div>

            <!-- Fact 7 -->
            <div class="city-fact-item">
                <i class="fas fa-vial"></i>
                <strong>SAMPLES</strong>
                <span>Free Samples On Request</span>
            </div>

            <!-- Fact 8 -->
            <div class="city-fact-item">
                <i class="fas fa-pencil-ruler"></i>
                <strong>DESIGN SUPPORT</strong>
                <span>Free 2D Design & Mockups</span>
            </div>

        </div>
    </div>
</section>





        <section class="city-overview" aria-label="About <?=$city_name;?>">
            <article class="city-overview__card city-card">
                <h2 class="city-section-title">Custom Packaging for Local Brands</h2>
                <p><?=$city_name;?> businesses need packaging that is as distinctive as the products inside. From retail shelves to direct-to-customer delivery, we create custom boxes that protect your products and elevate your brand.</p>
                <a class="city-link" href="#city-quote">Start your packaging project <i class="fas fa-arrow-right"></i></a>
            </article>

            <article class="city-overview__card city-card">
                <h2 class="city-section-title">Built Around Your Requirements</h2>
                <p>Choose the box style, material, dimensions, print finish, and order quantity that match your business. Our team makes the process easy from your first idea to final delivery.</p>
                <p>Whether you are launching a product or refreshing an established line, we provide practical packaging support at every stage.</p>
            </article>

            <article class="city-overview__card city-card">
                <h2 class="city-section-title">Why <?=$city_name;?> Businesses Choose Us</h2>
                <div class="city-highlights">
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fa-solid fa-box-open"></i></span>
                        <div><strong>Custom Built</strong><span>Packaging matched to your product and brand goals.</span></div>
                    </div>
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fas fa-print"></i></span>
                        <div><strong>Premium Printing</strong><span>Professional finishes that help products stand out.</span></div>
                    </div>
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fas fa-shipping-fast"></i></span>
                        <div><strong>Reliable Delivery</strong><span>Secure shipping for orders across the country.</span></div>
                    </div>
                </div>
            </article>
        </section>

        <section class="city-block city-card">
            <h2 class="city-section-title">Industries We Serve</h2>
            <div class="city-industries">
                <div class="city-industry"><i class="fas fa-pump-soap"></i><span>Cosmetics</span></div>
                <div class="city-industry"><i class="fas fa-utensils"></i><span>Food &amp; Beverage</span></div>
                <div class="city-industry"><i class="fas fa-leaf"></i><span>CBD</span></div>
                <div class="city-industry"><i class="fas fa-birthday-cake"></i><span>Bakery</span></div>
                <div class="city-industry"><i class="far fa-gem"></i><span>Jewelry</span></div>
                <div class="city-industry"><i class="fas fa-laptop"></i><span>Electronics</span></div>
                <div class="city-industry"><i class="fas fa-tshirt"></i><span>Apparel</span></div>
                <div class="city-industry"><i class="fas fa-heartbeat"></i><span>Health &amp; Beauty</span></div>
                <div class="city-industry"><i class="fas fa-ellipsis-h"></i><span>More</span></div>
            </div>
        </section>

        <section id="city-products" class="city-block city-card">
            <h2 class="city-section-title">Packaging Products</h2>
            <?php if (!empty($page_products)) { ?>
                <div class="city-product-row">
                    <div class="city-products">
                        <?php foreach ($page_products as $product) {
                            $product_images = $this->home_model->get_product_thumb_image($product['id']);
                            if (!$product_images) {
                                $product_images = $this->home_model->get_product_images($product['id']);
                            }
                            $product_image = !empty($product_images) ? $product_images[0] : array('image' => 'product1.jpg', 'alt_image' => 'Custom packaging product');
                        ?>
                            <a class="city-product" href="<?=base_url($product['seokey']);?>">
                                <span class="city-product__image"><img src="<?=base_url();?>files/images/<?=$product_image['image'];?>" alt="<?=!empty($product_image['alt_image']) ? $product_image['alt_image'] : $product['name'];?>"></span>
                                <span><?=$product['name'];?></span>
                            </a>
                        <?php } ?>
                    </div>
                    <a class="city-button city-button--navy" href="<?=base_url('all-products');?>">View All Products <i class="fas fa-arrow-right"></i></a>
                </div>
            <?php } else { ?>
                <div class="city-empty-products"><i class="fas fa-box-open"></i><span>Explore our custom box styles, materials, and finishing options.</span></div>
            <?php } ?>
        </section>

        <section class="city-two-column">
            <article class="city-materials city-card">
                <h2 class="city-section-title">Materials, Printing &amp; Finishing</h2>
                <div class="city-material-grid">
                    <div>
                        <div class="city-material-heading"><i class="fas fa-layer-group"></i>Materials</div>
                        <ul><li>Corrugated</li><li>Kraft</li><li>Rigid Stock</li><li>Eco-Friendly</li></ul>
                    </div>
                    <div>
                        <div class="city-material-heading"><i class="fas fa-print"></i>Printing</div>
                        <ul><li>Offset Printing</li><li>Digital Printing</li><li>UV Printing</li><li>Screen Printing</li></ul>
                    </div>
                    <div>
                        <div class="city-material-heading"><i class="fas fa-magic"></i>Finishing</div>
                        <ul><li>Gloss Lamination</li><li>Matte Lamination</li><li>Spot UV</li><li>Foil Stamping</li></ul>
                    </div>
                </div>
            </article>

            <article class="city-areas city-card">
                <h2 class="city-section-title">Areas We Serve in <?=$city_name;?></h2>
                <div class="city-areas__list">
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Los Angeles</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>San Diego</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>San Jose</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>San Francisco</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Sacramento</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Fresno</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Long Beach</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Oakland</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>And More Areas</span>
                </div>
                <div class="city-card__footer"><a class="city-button city-button--navy" href="#city-quote">Request a Quote <i class="fas fa-arrow-right"></i></a></div>
            </article>
        </section>

        <section class="city-two-column">
            <article class="city-why city-card">
                <h2 class="city-section-title">Why Packaging Matters</h2>
                <div class="city-why__body">
                    <div>
                        <p>Packaging is more than a box. It protects your product, reinforces your brand, and creates a memorable unboxing experience that encourages customers to come back.</p>
                        <p>For <?=$city_name;?> businesses, the right packaging can build trust, improve perceived value, and help products compete wherever they are sold.</p>
                        <a class="city-link" href="#city-quote">Create packaging that performs <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="city-why__graphic" aria-hidden="true">LEO<small>CUSTOM BOXES</small></div>
                </div>
            </article>

            <article class="city-stats city-card">
                <h2 class="city-section-title">What You Can Expect</h2>
                <div class="city-stats__grid">
                    <div class="city-stat"><i class="fas fa-box"></i><strong>Custom</strong><span>Box Styles</span></div>
                    <div class="city-stat"><i class="fas fa-pencil-ruler"></i><strong>Free</strong><span>Design Support</span></div>
                    <div class="city-stat"><i class="fas fa-print"></i><strong>Premium</strong><span>Print Quality</span></div>
                    <div class="city-stat"><i class="fas fa-truck"></i><strong>Fast</strong><span>Turnaround</span></div>
                    <div class="city-stat"><i class="fas fa-leaf"></i><strong>Eco</strong><span>Friendly Options</span></div>
                </div>
            </article>
        </section>

        <section class="city-conversion-grid">
            <article class="city-compare city-card">
                <h2 class="city-section-title">Why Choose Leo</h2>
                <div class="city-benefit-bar">
                    <span><i class="fas fa-box-open"></i>Low MOQ</span>
                    <span><i class="fas fa-gem"></i>Premium Quality</span>
                    <span><i class="fas fa-palette"></i>Free Design Support</span>
                    <span><i class="fas fa-truck"></i>Fast Delivery</span>
                    <span><i class="fas fa-leaf"></i>Eco-Friendly Options</span>
                </div>
                <div class="city-table-wrap">
                    <table class="city-table">
                        <thead><tr><th>Features</th><th class="city-table__highlight">Leo Custom Packaging Boxes</th><th>Others</th></tr></thead>
                        <tbody>
                            <tr><td>Minimum Order Quantity</td><td class="city-table__highlight">Low MOQ</td><td>High MOQ</td></tr>
                            <tr><td>Design Support</td><td class="city-table__highlight">Free Design Support</td><td>Paid Design Support</td></tr>
                            <tr><td>Quality</td><td class="city-table__highlight">Premium Quality</td><td>Standard Quality</td></tr>
                            <tr><td>Delivery Time</td><td class="city-table__highlight">Fast Delivery</td><td>Slower Delivery</td></tr>
                            <tr><td>Customer Support</td><td class="city-table__highlight">Dedicated Support</td><td>Limited Support</td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="city-order city-card">
                <h2 class="city-section-title">How to Order</h2>
                <div class="city-order__steps">
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-box-open"></i></span><b>1</b><strong>Choose Product</strong><span>Select your box style.</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-file-image"></i></span><b>2</b><strong>Share Artwork</strong><span>Send your logo or design.</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-file-invoice-dollar"></i></span><b>3</b><strong>Get Quote</strong><span>Receive tailored pricing.</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-check-double"></i></span><b>4</b><strong>Approve Design</strong><span>Confirm your proof.</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-shipping-fast"></i></span><b>5</b><strong>Production</strong><span>We print and deliver.</span></div>
                </div>
            </article>
        </section>


        <section class="city-faq-trust">
            <article class="city-faq city-card">
                <h2 class="city-section-title">Frequently Asked Questions</h2>
                <details><summary>What is the minimum order quantity?</summary><p>Minimums depend on the box style, material, size, and printing requirements. Share your project details and we will recommend the most cost-effective quantity.</p></details>
                <details><summary>How long does delivery take??</summary><p>Production and delivery times vary by order specifications. Our team will confirm the expected schedule with your quote.</p></details>
                <details><summary>Can I get help with my packaging design?</summary><p>Yes. Our team can help prepare your artwork and guide you toward a packaging solution that works for your brand.</p></details>
                <details><summary>Do you offer eco-friendly box options?</summary><p>Yes. We can discuss recyclable, kraft, and other material options to suit your packaging goals.</p></details>
            </article>

            <article class="city-trust city-card">
                <h2 class="city-section-title">Trust Signals</h2>
                <div class="city-trust__grid">
                    <div class="city-trust-item"><i class="fas fa-medal"></i><strong>Quality</strong><span>Made for your brand</span></div>
                    <div class="city-trust-item"><i class="fas fa-headset"></i><strong>Support</strong><span>Help when you need it</span></div>
                    <div class="city-trust-item"><i class="fas fa-clock"></i><strong>Responsive</strong><span>Clear, timely updates</span></div>
                    <div class="city-trust-item"><i class="fas fa-lock"></i><strong>Secure</strong><span>Safe inquiry process</span></div>
                </div>
            </article>
        </section>

        <section id="city-quote" class="city-quote city-card">
            <h2 class="city-section-title">Get a Quote</h2>
            <?php if ($this->session->flashdata('red_msg')) { ?>
                <div class="alert alert-danger"><?=$this->session->flashdata('red_msg');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('green_msg')) { ?>
                <div class="alert alert-success"><?=$this->session->flashdata('green_msg');?></div>
            <?php } ?>
            <form action="<?=base_url('home/contact');?>" method="post">
                <div class="city-quote__form-grid">
                    <input type="text" name="name" placeholder="Your Name *" required>
                    <input type="email" name="email" placeholder="Email Address *" required>
                    <input type="text" name="phone" placeholder="Phone Number *" required>
                    <input type="text" name="subject" placeholder="Packaging Type *" required>
                    <select name="quantity" required><option value="">Quantity *</option><option value="100-500">100 - 500</option><option value="500-1000">500 - 1,000</option><option value="1000-5000">1,000 - 5,000</option><option value="5000+">5,000+</option></select>
                    <input type="text" name="city" value="<?=$city_name;?>" placeholder="Service Area">
                </div>
                <textarea name="comments" placeholder="Tell us about your packaging project *" required></textarea>
                <div class="city-quote__footer">
                    <button class="city-button city-button--gold" type="submit" name="contact_submit" value="submit">Send Request <i class="fas fa-paper-plane"></i></button>
                    <span class="city-quote__privacy"><i class="fas fa-lock"></i>Your information is safe with us. We never share your data.</span>
                </div>
            </form>
        </section>

        <?php if ($page_description !== '' || $bottom_description !== '') { ?>
            <section class="city-editorial city-card">
                <h2>Custom Boxes in <?=$city_name;?></h2>
                <?=$page_description;?>
                <?=$bottom_description;?>
            </section>
        <?php } ?>
    </div>
</main>