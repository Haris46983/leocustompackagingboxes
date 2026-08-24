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
    font-family: 'Inter', Arial, sans-serif;
    width: 100%;
    overflow-x: hidden;
}

.city-page *,
.city-page *::before,
.city-page *::after {
    box-sizing: border-box;
}

.city-page a {
    transition: all .2s ease;
}

.city-shell {
    width: calc(100% - 40px) !important;
    max-width: 1240px !important;
    margin: 0 auto !important;
    padding: 0 !important;
    float: none !important;
    clear: both;
}

main.city-page {
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
    margin: 0 0 16px;
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
    min-height: 44px;
    padding: 10px 20px;
    border: 1px solid transparent;
    border-radius: 5px;
    font-size: 13px;
    font-weight: 700;
    line-height: 1.2;
    text-decoration: none;
    cursor: pointer;
}

.city-button--gold {
    color: #fff;
    background: var(--city-gold);
    border-color: var(--city-gold);
}

.city-button--gold:hover {
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

.city-button--navy:hover {
    color: #fff;
    background: var(--city-navy-2);
}

.city-button--outline {
    color: var(--city-navy);
    background: rgba(255, 255, 255, .9);
    border-color: var(--city-navy);
}

.city-button--outline:hover {
    color: #fff;
    background: var(--city-navy);
}

/* Hero Section */
.city-hero {
    position: relative;
    isolation: isolate;
    min-height: 420px;
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
    background: linear-gradient(90deg, rgba(255, 255, 255, .98) 0%, rgba(255, 255, 255, .94) 38%, rgba(255, 255, 255, .62) 58%, rgba(255, 255, 255, .08) 80%);
}

.city-hero__inner {
    position: relative;
    min-height: 420px;
    padding: 40px 0 44px !important;
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
    margin: 0 0 12px;
    color: var(--city-navy);
    font-size: clamp(34px, 4.2vw, 56px);
    font-weight: 800;
    letter-spacing: -.04em;
    line-height: 1.05;
}

.city-hero h1 span {
    display: block;
    color: var(--city-gold);
}

.city-hero__lead {
    max-width: 560px;
    margin: 0;
    color: #34445a;
    font-size: 15px;
    font-weight: 500;
    line-height: 1.6;
}

.city-hero__benefits {
    display: flex;
    flex-wrap: wrap;
    gap: 8px 18px;
    margin: 18px 0 22px;
}

.city-hero__benefit {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--city-navy);
    font-size: 12px;
    font-weight: 600;
}

.city-hero__benefit i {
    color: var(--city-gold);
    font-size: 14px;
}

.city-hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.city-service-badge {
    position: absolute;
    right: 0;
    bottom: 30px;
    width: min(240px, 25%);
    padding: 18px 20px;
    color: #fff;
    background: rgba(6, 27, 59, .95);
    border: 1px solid rgba(255, 255, 255, .2);
    border-radius: 10px;
    box-shadow: 0 16px 34px rgba(7, 27, 58, .25);
}

.city-service-badge > i {
    display: block;
    margin-bottom: 5px;
    color: var(--city-gold);
    font-size: 22px;
}

.city-service-badge span {
    display: block;
}

.city-service-badge__eyebrow {
    margin-bottom: 2px;
    font-size: 11px;
    font-weight: 600;
}

.city-service-badge__city {
    color: var(--city-gold);
    font-size: 20px;
    font-weight: 800;
    line-height: 1.15;
}

.city-service-badge__copy {
    margin-top: 4px;
    font-size: 11px;
    line-height: 1.4;
}

/* Content wrapper */
.city-content {
    padding: 16px 0 40px;
}

/* AI Summary */
.city-ai-summary {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 14px;
    align-items: center;
    padding: 15px 20px;
    background: linear-gradient(100deg, #fbfdff, #f4f7fc);
}

.city-ai-summary__icon {
    display: grid;
    width: 36px;
    height: 36px;
    place-items: center;
    color: var(--city-navy-2);
    background: #e9f0fb;
    border-radius: 50%;
    font-size: 16px;
}

.city-ai-summary__title {
    display: block;
    margin-bottom: 2px;
    color: var(--city-navy);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .04em;
}

.city-ai-summary p {
    margin: 0;
    color: #40516a;
    font-size: 13px;
    line-height: 1.5;
}

/* 3-Column Overview */
.city-overview {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 14px;
    margin-top: 14px;
}

.city-overview__card {
    display: flex;
    flex-direction: column;
    padding: 20px;
    min-height: 240px;
}

.city-overview__card p {
    margin: 0;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.65;
}

.city-overview__card p + p {
    margin-top: 10px;
}

.city-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: auto;
    padding-top: 12px;
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
    gap: 12px;
}

.city-highlight {
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.city-highlight__icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 32px;
    height: 32px;
    background: #f0f4fa;
    border-radius: 6px;
    color: var(--city-navy-2);
    font-size: 14px;
    flex-shrink: 0;
}

.city-highlight strong {
    display: block;
    margin-bottom: 2px;
    color: var(--city-navy);
    font-size: 12px;
    font-weight: 700;
    line-height: 1.2;
}

.city-highlight span {
    display: block;
    color: var(--city-copy);
    font-size: 11px;
    line-height: 1.35;
}

/* Common Block */
.city-block {
    margin-top: 14px;
    padding: 20px;
}

/* Industries */
.city-industries {
    display: grid;
    grid-template-columns: repeat(9, 1fr);
}

.city-industry {
    display: grid;
    min-height: 70px;
    place-items: center;
    padding: 4px 6px;
    color: var(--city-navy);
    border-right: 1px solid var(--city-line);
    text-align: center;
}

.city-industry:last-child {
    border-right: 0;
}

.city-industry i {
    margin-bottom: 6px;
    color: var(--city-gold-dark);
    font-size: 19px;
}

.city-industry span {
    font-size: 11px;
    font-weight: 700;
    line-height: 1.2;
}

/* Products */
.city-product-row {
    display: flex;
    align-items: stretch;
    gap: 16px;
}

.city-products {
    display: grid;
    flex: 1;
    grid-template-columns: repeat(6, minmax(85px, 1fr));
}

.city-product {
    display: grid;
    grid-template-rows: 76px auto;
    align-items: center;
    min-width: 0;
    padding: 0 8px 4px;
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
    height: 72px;
    place-items: center;
}

.city-product__image img {
    max-width: 100%;
    height: 64px;
    object-fit: contain;
    mix-blend-mode: multiply;
    transition: transform .2s;
}

.city-product span {
    display: block;
    overflow: hidden;
    font-size: 11px;
    font-weight: 700;
    line-height: 1.25;
    text-overflow: ellipsis;
}

.city-product:hover img {
    transform: translateY(-3px);
}

.city-product-row .city-button {
    align-self: center;
    min-width: 155px;
}

/* Quick Facts Banner */
.city-quick-facts-card {
    background: #fffbf2 !important;
    border: 1px solid #f4e8d1 !important;
    padding: 14px 10px !important;
    margin-top: 14px;
}

.city-facts-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.city-facts-title {
    padding: 0 12px;
    border-right: 1.5px solid #e3d5ba;
    min-width: 125px;
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

.city-fact-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 6px;
    border-right: 1px solid #eee4cf;
}

.city-fact-item:last-child {
    border-right: none;
}

.city-fact-item i {
    font-size: 15px;
    color: var(--city-navy);
    margin-bottom: 4px;
}

.city-fact-item strong {
    display: block;
    font-size: 9px;
    color: var(--city-navy);
    text-transform: uppercase;
    letter-spacing: .02em;
    margin-bottom: 2px;
}

.city-fact-item span {
    display: block;
    font-size: 10px;
    color: var(--city-copy);
    line-height: 1.2;
}

/* Two Column Layouts */
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
    padding: 20px;
}

.city-material-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
}

.city-material-heading {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
    color: var(--city-navy);
    font-size: 12px;
    font-weight: 800;
}

.city-material-heading i {
    color: var(--city-gold-dark);
    font-size: 14px;
}

.city-material-grid ul {
    display: grid;
    gap: 5px;
    margin: 0;
    padding: 0;
    color: var(--city-copy);
    font-size: 12px;
    list-style: none;
}

.city-areas__list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px 12px;
}

.city-area {
    display: flex;
    align-items: center;
    gap: 6px;
    color: var(--city-copy);
    font-size: 12px;
}

.city-area i {
    color: var(--city-gold-dark);
    font-size: 11px;
}

.city-card__footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 16px;
}

.city-card__footer .city-button {
    min-height: 36px;
    padding: 8px 16px;
    font-size: 12px;
}

/* Local Packaging Insights */
.city-insights-card {
    margin-top: 14px;
    padding: 22px !important;
}

.city-insights__container {
    display: grid;
    grid-template-columns: 1.1fr 1.3fr;
    gap: 30px;
    align-items: center;
}

.city-insights__content p {
    font-size: 12px;
    line-height: 1.65;
    color: var(--city-copy);
    margin: 0;
}

.city-insights__stats {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.city-insights__item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 8px;
}

.city-insights__icon {
    font-size: 24px;
    color: var(--city-navy-2);
    margin-bottom: 8px;
    height: 38px;
    display: flex !important;
    align-items: center;
    justify-content: center;
}

.city-insights__item strong {
    font-size: 10px;
    color: var(--city-navy);
    line-height: 1.3;
    font-weight: 700;
}

.city-insights__divider {
    width: 1px;
    height: 50px;
    background-color: var(--city-line);
    flex-shrink: 0;
}

/* Why Packaging Matters & Key Stats */
.city-why__body {
    display: grid;
    grid-template-columns: 1fr 110px;
    gap: 16px;
    align-items: center;
}

.city-why__body p {
    margin: 0;
    color: var(--city-copy);
    font-size: 12px;
    line-height: 1.6;
}

.city-why__body p + p {
    margin-top: 8px;
}

.city-why__graphic {
    position: relative;
    display: grid;
    width: 100px;
    height: 120px;
    place-items: center;
    color: #fff;
    background: linear-gradient(145deg, #163d75, #061a39);
    border-radius: 8px;
    box-shadow: 8px 8px 0 #d9e1eb;
    font-size: 24px;
    font-weight: 800;
}

.city-why__graphic small {
    position: absolute;
    bottom: 18px;
    font-size: 7.5px;
    font-weight: 600;
    letter-spacing: .08em;
}

.city-stats__grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 8px;
    text-align: center;
    align-items: center;
    height: 100%;
}

.city-stat {
    display: grid;
    gap: 4px;
    align-content: center;
    justify-items: center;
}

.city-stat i {
    display: grid;
    width: 34px;
    height: 34px;
    place-items: center;
    color: var(--city-navy-2);
    background: #f0f4fa;
    border-radius: 50%;
    font-size: 15px;
}

.city-stat strong {
    color: var(--city-navy);
    font-size: 14px;
    line-height: 1.2;
}

.city-stat span {
    color: var(--city-copy);
    font-size: 10px;
    line-height: 1.2;
}

/* Why Choose & How to Order */
.city-compare,
.city-order {
    padding: 20px;
}

.city-benefit-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 8px 14px;
    margin: -4px 0 12px;
    color: var(--city-navy);
    font-size: 10.5px;
    font-weight: 700;
}

.city-benefit-bar span {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.city-benefit-bar i {
    color: var(--city-gold-dark);
}

.city-table-wrap {
    overflow-x: auto;
}

.city-table {
    width: 100%;
    min-width: 440px;
    border-collapse: collapse;
    color: #42516a;
    font-size: 11px;
    text-align: center;
}

.city-table th,
.city-table td {
    padding: 7px 8px;
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
    gap: 2px;
}

.city-step {
    position: relative;
    display: grid;
    gap: 4px;
    justify-items: center;
    padding: 0 2px;
    text-align: center;
}

.city-step:not(:last-child)::after {
    position: absolute;
    top: 16px;
    right: -8px;
    color: #c6ced9;
    content: "\2192";
    font-size: 16px;
}

.city-step__icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 36px;
    height: 36px;
    background: #f0f4fa;
    border-radius: 50%;
    margin: 0 auto;
    color: var(--city-navy-2);
}

.city-step b {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 16px;
    height: 16px;
    margin: -8px auto 4px;
    position: relative;
    z-index: 2;
    background: var(--city-gold);
    color: #fff;
    border-radius: 50%;
    font-size: 9px;
}

.city-step strong {
    color: var(--city-navy);
    font-size: 10.5px;
    line-height: 1.2;
}

.city-step span {
    color: var(--city-copy);
    font-size: 9.5px;
    line-height: 1.25;
}

/* Bottom 3-Column Layout (FAQ, Trust, Quote) */
.city-bottom-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr 1.35fr;
    gap: 14px;
    margin-top: 14px;
}

.city-faq,
.city-trust,
.city-quote {
    padding: 20px;
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
    gap: 10px;
    padding: 8px 0;
    color: var(--city-navy);
    cursor: pointer;
    font-size: 11.5px;
    font-weight: 700;
    list-style: none;
}

.city-faq summary::-webkit-details-marker {
    display: none;
}

.city-faq summary::after {
    color: var(--city-gold-dark);
    content: '+';
    font-size: 16px;
    font-weight: 500;
}

.city-faq details[open] summary::after {
    content: '\2212';
}

.city-faq p {
    margin: 0 0 8px;
    color: var(--city-copy);
    font-size: 11.5px;
    line-height: 1.5;
}

.city-trust__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px 8px;
    text-align: center;
    margin-top: 10px;
}

.city-trust-item i {
    display: block;
    margin-bottom: 4px;
    color: var(--city-navy-2);
    font-size: 20px;
}

.city-trust-item strong {
    display: block;
    color: var(--city-navy);
    font-size: 13px;
}

.city-trust-item span {
    display: block;
    margin-top: 2px;
    color: var(--city-copy);
    font-size: 10px;
    line-height: 1.25;
}

/* Quote Form (Compact 3rd Column) */
.city-quote {
    background: #fffdf8;
    border-color: #f4dfb5;
}

.city-quote .alert {
    margin-bottom: 10px;
    font-size: 12px;
    padding: 8px;
}

.city-quote__form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
}

.city-quote input,
.city-quote select,
.city-quote textarea {
    width: 100%;
    min-height: 36px;
    padding: 6px 10px;
    color: var(--city-ink);
    background: #fff;
    border: 1px solid #dfe5ed;
    border-radius: 4px;
    font-family: inherit;
    font-size: 11.5px;
    outline: 0;
}

.city-quote textarea {
    display: block;
    min-height: 55px;
    margin-top: 8px;
    resize: vertical;
}

.city-quote input:focus,
.city-quote select:focus,
.city-quote textarea:focus {
    border-color: var(--city-gold);
}

.city-quote__footer {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-top: 10px;
}

.city-quote__privacy {
    color: #657087;
    font-size: 10px;
}

.city-quote__privacy i {
    margin-right: 4px;
    color: var(--city-navy);
}

/* Editorial Block */
.city-editorial {
    margin-top: 14px;
    padding: 22px;
}

.city-editorial h2,
.city-editorial h3 {
    color: var(--city-navy);
}

.city-editorial h2 {
    margin: 0 0 12px;
    font-size: 20px;
}

.city-editorial p,
.city-editorial li {
    color: var(--city-copy);
    font-size: 12.5px;
    line-height: 1.7;
}

/* Responsive Media Queries */
@media (max-width: 1100px) {
    .city-industries {
        grid-template-columns: repeat(5, 1fr);
        gap: 12px 0;
    }
    .city-industry:nth-child(5) { border-right: 0; }
    .city-product-row { display: block; }
    .city-products {
        grid-template-columns: repeat(3, 1fr);
        gap: 12px 0;
    }
    .city-product:nth-child(3n) { border-right: 0; }
    .city-product-row .city-button { margin-top: 14px; }
    .city-bottom-grid {
        grid-template-columns: 1fr;
    }
    .city-facts-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }
    .city-facts-title {
        grid-column: span 3;
        border-right: none;
        border-bottom: 1px solid #e3d5ba;
        padding-bottom: 8px;
        text-align: center;
    }
}

@media (max-width: 860px) {
    .city-overview,
    .city-two-column,
    .city-insights__container {
        grid-template-columns: 1fr;
    }
    .city-insights__divider { display: none; }
    .city-insights__stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px 0;
    }
}

@media (max-width: 640px) {
    .city-shell {
        width: min(100% - 20px, 1240px);
    }
    .city-hero__content {
        width: 100%;
    }
    .city-service-badge {
        position: relative;
        right: auto;
        bottom: auto;
        width: 100%;
        margin-top: 20px;
    }
    .city-industries {
        grid-template-columns: repeat(3, 1fr);
    }
    .city-facts-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    .city-facts-title { grid-column: span 2; }
    .city-quote__form-grid {
        grid-template-columns: 1fr;
    }
    .city-stats__grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 14px 4px;
    }
    .city-order__steps {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px 6px;
    }
    .city-step:not(:last-child)::after {
        display: none;
    }
}
</style>

<main class="main city-page">
    <!-- 1. Hero Section -->
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
        <!-- 2. AI Summary -->
        <section class="city-ai-summary city-card">
            <span class="city-ai-summary__icon"><i class="fa-solid fa-robot"></i></span>
            <div>
                <span class="city-ai-summary__title">AI SUMMARY</span>
                <p>Leo Custom Packaging Boxes offers premium quality custom boxes for businesses in <?=$city_name;?>. We provide low MOQ, fast turnaround, free design support, and nationwide shipping. Perfect packaging to protect your products and elevate your brand.</p>
            </div>
        </section>

        <!-- 3. 3-Column Overview Row -->
        <section class="city-overview" aria-label="Overview of <?=$city_name;?>">
            <article class="city-overview__card city-card">
                <h2 class="city-section-title">Introduction</h2>
                <p><?=$city_name;?> is a dynamic hub of innovation, entertainment, and commerce. We help businesses stand out with custom packaging that protects, promotes, and delivers value.</p>
                <img src="<?=base_url('files/images/back.png');?>" alt="City Skyline" style="width: 100%; display: block; margin-top: auto; padding-top: 15px;" onerror="this.style.display='none';">
            </article>

            <article class="city-overview__card city-card">
                <h2 class="city-section-title">Local Business Overview</h2>
                <p><?=$city_name;?> has a diverse economy driven by retail, technology, food & beverage, and eCommerce. Thousands of local brands rely on custom packaging to enhance their brand image, ensure product safety, and create memorable customer experiences.</p>
                <p>Our packaging solutions are designed to support businesses of every size across <?=$city_name;?> and nearby areas.</p>
                <a class="city-link" href="#city-quote">View More <i class="fas fa-arrow-right"></i></a>
            </article>

            <article class="city-overview__card city-card">
                <div class="city-highlights">
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fa-solid fa-gem"></i></span>
                        <div><strong>Strong Economy</strong><span>One of the region's largest business hubs.</span></div>
                    </div>
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fa-solid fa-store"></i></span>
                        <div><strong>Thriving Businesses</strong><span>Home to startups, brands & enterprises.</span></div>
                    </div>
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fa-solid fa-chart-line"></i></span>
                        <div><strong>High Packaging Demand</strong><span>Rising need for custom & sustainable packaging.</span></div>
                    </div>
                    <div class="city-highlight">
                        <span class="city-highlight__icon"><i class="fa-solid fa-truck-fast"></i></span>
                        <div><strong>Logistics Advantage</strong><span>Access to rapid shipping & distribution routes.</span></div>
                    </div>
                </div>
            </article>
        </section>

        <!-- 4. Industries We Serve -->
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

        <!-- 5. Packaging Products -->
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
                                <span class="city-product__image"><img src="<?=base_url('files/images/' . $product_image['image']);?>" alt="<?=!empty($product_image['alt_image']) ? $product_image['alt_image'] : $product['name'];?>"></span>
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

        <!-- 6. Packaging Quick Facts -->
        <section class="city-quick-facts-card city-card">
            <div class="city-facts-wrapper">
                <div class="city-facts-title">
                    <span class="navy-text">PACKAGING</span>
                    <span class="gold-text">QUICK FACTS</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-box"></i>
                    <strong>MOQ</strong>
                    <span>Low MOQ from 100 boxes</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-stopwatch"></i>
                    <strong>TURNAROUND</strong>
                    <span>5-7 Business Days Delivery</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-layer-group"></i>
                    <strong>MATERIALS</strong>
                    <span>Premium Quality & Eco-Friendly</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-print"></i>
                    <strong>PRINTING</strong>
                    <span>High Quality Offset & Digital</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-magic"></i>
                    <strong>FINISHING</strong>
                    <span>Gloss, Matte, Spot UV, Foil</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-truck"></i>
                    <strong>SHIPPING</strong>
                    <span>Free Shipping Across USA</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-vial"></i>
                    <strong>SAMPLES</strong>
                    <span>Free Samples On Request</span>
                </div>
                <div class="city-fact-item">
                    <i class="fas fa-pencil-ruler"></i>
                    <strong>DESIGN SUPPORT</strong>
                    <span>Free 3D Design & Mockups</span>
                </div>
            </div>
        </section>

        <!-- 7. Materials, Printing & Areas We Serve -->
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
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Downtown <?=$city_name;?></span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Pasadena</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>West Hollywood</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Hollywood</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Long Beach</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Inglewood</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Beverly Hills</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>Glendale</span>
                    <span class="city-area"><i class="fas fa-map-marker-alt"></i>And More Areas</span>
                </div>
                <div class="city-card__footer"><a class="city-button city-button--navy" href="#city-quote">View All Areas <i class="fas fa-arrow-right"></i></a></div>
            </article>
        </section>

        <!-- 8. Local Packaging Insights -->
        <section class="city-insights-card city-card">
            <div class="city-insights__container">
                <div class="city-insights__content">
                    <h2 class="city-section-title">Local Packaging Insights – <?=$city_name;?></h2>
                    <p><?=$city_name;?> is home to a wide range of industries including entertainment, fashion, beauty, health, food & beverage, and eCommerce. With a strong focus on branding and sustainability, businesses in <?=$city_name;?> are increasingly choosing custom packaging to create a premium unboxing experience and stand out in a competitive market. The demand for eco-friendly packaging solutions is growing rapidly as more brands adopt sustainable practices.</p>
                </div>

                <div class="city-insights__stats">
                    <div class="city-insights__item">
                        <div class="city-insights__icon"><i class="fas fa-leaf"></i></div>
                        <strong>High Demand for<br>Sustainable Packaging</strong>
                    </div>
                    <div class="city-insights__divider"></div>
                    <div class="city-insights__item">
                        <div class="city-insights__icon"><i class="fas fa-shopping-basket"></i></div>
                        <strong>Growing eCommerce<br>& DTC Brands</strong>
                    </div>
                    <div class="city-insights__divider"></div>
                    <div class="city-insights__item">
                        <div class="city-insights__icon"><i class="fas fa-gem"></i></div>
                        <strong>Strong Retail<br>& Luxury Market</strong>
                    </div>
                    <div class="city-insights__divider"></div>
                    <div class="city-insights__item">
                        <div class="city-insights__icon"><i class="fas fa-rocket"></i></div>
                        <strong>Fast Growing<br>Local Startups</strong>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. Why Packaging Matters & Key Statistics -->
        <section class="city-two-column">
            <article class="city-why city-card">
                <h2 class="city-section-title">Why Packaging Matters</h2>
                <div class="city-why__body">
                    <div>
                        <p>Packaging is more than just a box: it is a powerful tool that protects your products, strengthens your brand, and creates a memorable customer experience.</p>
                        <p>High-quality custom packaging enhances product safety during handling and shipping, builds trust with your customers, and helps your business stand out.</p>
                        <a class="city-link" href="#city-quote">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="city-why__graphic" aria-hidden="true">LEO<small>CUSTOM BOXES</small></div>
                </div>
            </article>

            <article class="city-stats city-card">
                <h2 class="city-section-title">Key Statistics – <?=$city_name;?></h2>
                <div class="city-stats__grid">
                    <div class="city-stat"><i class="fas fa-users"></i><strong>3.9M+</strong><span>Population</span></div>
                    <div class="city-stat"><i class="fas fa-store"></i><strong>500K+</strong><span>Businesses</span></div>
                    <div class="city-stat"><i class="fas fa-plane-departure"></i><strong>1</strong><span>International Airport</span></div>
                    <div class="city-stat"><i class="fas fa-anchor"></i><strong>1</strong><span>Major Sea Port</span></div>
                    <div class="city-stat"><i class="fas fa-chart-line"></i><strong>4.2%</strong><span>Annual Growth</span></div>
                </div>
            </article>
        </section>

        <!-- 10. Why Choose Leo & How to Order -->
        <section class="city-two-column">
            <article class="city-compare city-card">
                <h2 class="city-section-title">Why Choose Leo</h2>
                <div class="city-benefit-bar">
                    <span><i class="fas fa-box-open"></i>Low MOQ</span>
                    <span><i class="fas fa-gem"></i>Premium Quality</span>
                    <span><i class="fas fa-palette"></i>Free Design Support</span>
                    <span><i class="fas fa-truck"></i>Fast Delivery</span>
                    <span><i class="fas fa-leaf"></i>Eco-Friendly</span>
                </div>
                <div class="city-table-wrap">
                    <table class="city-table">
                        <thead><tr><th>Features</th><th class="city-table__highlight">Leo Custom Packaging Boxes</th><th>Others</th></tr></thead>
                        <tbody>
                            <tr><td>Minimum Order Quantity</td><td class="city-table__highlight">Low MOQ</td><td>High MOQ</td></tr>
                            <tr><td>Design Support</td><td class="city-table__highlight">Free Design Support</td><td>Paid Design Support</td></tr>
                            <tr><td>Quality</td><td class="city-table__highlight">Premium Quality</td><td>Standard Quality</td></tr>
                            <tr><td>Delivery Time</td><td class="city-table__highlight">Fast Delivery</td><td>Slow Delivery</td></tr>
                            <tr><td>Customer Support</td><td class="city-table__highlight">24/7 Support</td><td>Limited Support</td></tr>
                            <tr><td>Eco-Friendly Options</td><td class="city-table__highlight">Available</td><td>Limited</td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="city-order city-card">
                <h2 class="city-section-title">How to Order</h2>
                <div class="city-order__steps">
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-box-open"></i></span><b>1</b><strong>Choose Product</strong><span>Select your desired product &amp; quantity</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-file-image"></i></span><b>2</b><strong>Upload Artwork</strong><span>Send your logo or design files</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-file-invoice-dollar"></i></span><b>3</b><strong>Get Quote</strong><span>Receive instant pricing</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-check-double"></i></span><b>4</b><strong>Approve Design</strong><span>We create &amp; you approve the design</span></div>
                    <div class="city-step"><span class="city-step__icon"><i class="fas fa-shipping-fast"></i></span><b>5</b><strong>Production &amp; Delivery</strong><span>We print and deliver to your doorstep</span></div>
                </div>
            </article>
        </section>

        <!-- 11. FAQ, Trust Signals & Get a Quote (3-Column Layout) -->
        <section class="city-bottom-grid">
            <!-- FAQ Column -->
            <article class="city-faq city-card">
                <h2 class="city-section-title">Frequently Asked Questions</h2>
                <details><summary>What is the minimum order quantity?</summary><p>Our minimum order quantity starts from as low as 100 boxes.</p></details>
                <details><summary>How long does delivery take?</summary><p>Standard delivery takes around 5-7 business days after design approval.</p></details>
                <details><summary>Can I get a sample before placing bulk order?</summary><p>Yes, we offer free samples on request so you can inspect quality.</p></details>
                <details><summary>Do you offer free design support?</summary><p>Yes, our design team provides 2D/3D mockups and artwork assistance at no cost.</p></details>
                <details><summary>What file formats do you accept for printing?</summary><p>We accept AI, PDF, PSD, EPS, and high-resolution vector files.</p></details>
                <details><summary>Do you ship nationwide?</summary><p>Yes, we provide free nationwide shipping across the USA.</p></details>
            </article>

            <!-- Trust Signals Column -->
            <article class="city-trust city-card">
                <h2 class="city-section-title">Trust Signals</h2>
                <div class="city-trust__grid">
                    <div class="city-trust-item"><i class="fas fa-medal"></i><strong>10+</strong><span>Years of Experience</span></div>
                    <div class="city-trust-item"><i class="fas fa-smile"></i><strong>5000+</strong><span>Happy Customers</span></div>
                    <div class="city-trust-item"><i class="fas fa-clock"></i><strong>24 Hour</strong><span>Fast Response</span></div>
                    <div class="city-trust-item"><i class="fas fa-lock"></i><strong>100%</strong><span>Secure Inquiry</span></div>
                </div>
            </article>

            <!-- Get a Quote Column -->
            <article id="city-quote" class="city-quote city-card">
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
                        <select name="quantity" style="grid-column: span 2;" required>
                            <option value="">Quantity *</option>
                            <option value="100-500">100 - 500</option>
                            <option value="500-1000">500 - 1,000</option>
                            <option value="1000-5000">1,000 - 5,000</option>
                            <option value="5000+">5,000+</option>
                        </select>
                        <input type="hidden" name="city" value="<?=$city_name;?>">
                    </div>
                    <textarea name="comments" placeholder="Message / Project Details *" required></textarea>
                    <div class="city-quote__footer">
                        <button class="city-button city-button--gold" type="submit" name="contact_submit" value="submit" style="width: 100%;">Send Request <i class="fas fa-paper-plane"></i></button>
                        <span class="city-quote__privacy"><i class="fas fa-lock"></i>Your information is safe with us. We never share your data.</span>
                    </div>
                </form>
            </article>
        </section>

        <!-- 12. Editorial Section -->
        <?php if ($page_description !== '' || $bottom_description !== '') { ?>
            <section class="city-editorial city-card">
                <h2>Custom Boxes in <?=$city_name;?></h2>
                <?=$page_description;?>
                <?=$bottom_description;?>
            </section>
        <?php } ?>
    </div>
</main>