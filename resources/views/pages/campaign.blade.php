@extends('layouts.app')
@section('content')
<style>
  :root {
    --gold: #C8972A;
    --gold-light: #FFD580;
    --saffron: #C8590A;
    --saffron-light: #F97316;
    --cream: #FFFBF2;
    --warm: #FDF3E3;
    --stone: #44200A;
    --stone-light: #7A3B1E;
    --green: #166534;
    --green-bg: #F0FDF4;
  }

  html {
    scroll-behavior: smooth;
    overflow-x: hidden;
    max-width: 100%;
  }

  body {
    font-family: 'Lato', sans-serif;
    background: var(--cream);
    color: #2C1A0A;
    overflow-x: hidden;
    max-width: 100%;
  }

  /* ── HERO ── */
  .hero {
    position: relative;
    min-height: 92vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: #0a0500;
  }

  .hero-grad {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(10, 5, 0, 0.95) 0%, rgba(10, 5, 0, 0.7) 50%, rgba(20, 8, 0, 0.92) 100%);
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    background-image: url('/images/campaign-background.png');
    background-size: cover;
    background-position: center 70%;
  }

  .hero-inner {
    position: relative;
    z-index: 2;
    width: 45%;
    margin-left: auto;
    margin-right: 4%;
    padding: 120px 40px 80px;
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
  }

  .hero-cursive {
    font-family: 'Dancing Script', cursive;
    font-size: clamp(22px, 3vw, 36px);
    color: rgba(255, 210, 120, 0.8);
    font-weight: 600;
    margin-bottom: 0;
  }

  .hero-title {
    font-family: 'Cinzel', serif;
    font-size: clamp(48px, 8vw, 96px);
    font-weight: 900;
    color: var(--gold-light);
    line-height: 1;
    margin-bottom: 0;
    text-shadow: 0 0 60px rgba(200, 90, 0, 0.4);
  }

  .hero-sub {
    font-family: 'Cinzel', serif;
    font-size: clamp(11px, 1.5vw, 15px);
    letter-spacing: 4px;
    text-transform: uppercase;
    color: rgba(255, 190, 80, 0.55);
    margin-bottom: 0;
  }

  .hero-desc {
    font-size: clamp(15px, 1.8vw, 19px);
    color: rgba(255, 235, 200, 0.85);
    font-weight: 300;
    line-height: 1.8;
    max-width: 660px;
    margin: 0;
  }

  .hero-desc strong {
    color: var(--gold-light);
    font-weight: 700;
  }

  .hero-dates {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(200, 90, 0, 0.2);
    border: 1px solid rgba(200, 110, 0, 0.35);
    border-radius: 8px;
    padding: 8px 20px;
    margin-bottom: 0;
  }

  .hero-dates-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--saffron-light);
  }

  .hero-dates-text {
    font-size: 13px;
    color: rgba(255, 200, 120, 0.85);
    letter-spacing: 1px;
  }

  .hero-btns {
    display: flex;
    gap: 16px;
    justify-content: flex-start;
    flex-wrap: wrap;
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--saffron);
    color: #fff;
    border: none;
    padding: 16px 40px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.25s;
  }

  .btn-primary:hover {
    background: #a8470a;
    transform: translateY(-2px);
  }

  .btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: var(--gold-light);
    border: 1.5px solid rgba(255, 190, 60, 0.4);
    padding: 16px 40px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.25s;
  }

  .btn-ghost:hover {
    border-color: var(--gold-light);
    background: rgba(255, 200, 80, 0.08);
    transform: translateY(-2px);
  }

  /* ── COUNTER STRIP ── */
  .counter-strip {
    background: linear-gradient(135deg, #1a0800, #2d1000, #1a0800);
    padding: 40px 20px;
    text-align: center;
  }

  .counter-inner {
    max-width: 700px;
    margin: 0 auto;
  }

  .counter-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-bottom: 16px;
  }

  .live-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #4eff8a;
    animation: livepulse 1.4s infinite;
  }

  @keyframes livepulse {

    0%,
    100% {
      opacity: 1;
      transform: scale(1)
    }

    50% {
      opacity: 0.3;
      transform: scale(0.7)
    }
  }

  .counter-label-text {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: rgba(255, 200, 100, 0.5);
  }

  .counter-digits {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 6px;
    margin-bottom: 14px;
  }

  .digit-box {
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 180, 40, 0.25);
    border-radius: 10px;
    width: 52px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cinzel', serif;
    font-weight: 700;
    font-size: 36px;
    color: var(--gold-light);
    position: relative;
  }

  .digit-box::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    height: 1px;
    background: rgba(255, 180, 40, 0.12);
  }

  .digit-comma {
    display: flex;
    align-items: flex-end;
    padding-bottom: 10px;
    color: rgba(255, 180, 40, 0.35);
    font-size: 26px;
    font-weight: 700;
    font-family: 'Cinzel', serif;
  }

  .counter-progress-row {
    display: flex;
    align-items: center;
    gap: 14px;
    max-width: 440px;
    margin: 0 auto;
  }

  .counter-bar-bg {
    flex: 1;
    height: 5px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.08);
    overflow: hidden;
  }

  .counter-bar-fill {
    height: 100%;
    border-radius: 10px;
    background: linear-gradient(90deg, #C8590A, #FFD580);
    width: 0%;
    transition: width 2.5s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .counter-pct {
    font-size: 12px;
    color: rgba(255, 200, 100, 0.6);
    white-space: nowrap;
  }

  .counter-pct strong {
    color: var(--gold-light);
  }

  /* ── SECTIONS ── */
  section {
    padding: 80px 20px;
  }

  .section-inner {
    max-width: 1100px;
    margin: 0 auto;
  }

  .section-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(200, 90, 0, 0.1);
    border: 1px solid rgba(200, 90, 0, 0.2);
    border-radius: 6px;
    padding: 5px 14px;
    margin-bottom: 20px;
  }

  .section-tag-line {
    width: 20px;
    height: 1.5px;
    background: var(--saffron);
  }

  .section-tag-text {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: var(--saffron);
    font-weight: 700;
  }

  .section-title {
    font-family: 'Cinzel', serif;
    font-size: clamp(26px, 4vw, 42px);
    font-weight: 700;
    color: var(--stone);
    margin-bottom: 12px;
    line-height: 1.15;
  }

  .section-title span {
    color: var(--saffron);
  }

  .section-lead {
    font-size: clamp(15px, 1.6vw, 18px);
    color: #5C3010;
    font-weight: 300;
    line-height: 1.8;
    max-width: 680px;
    margin-bottom: 48px;
  }

  /* ── ABOUT SECTION ── */
  .about-section {
    background: var(--warm);
  }

  .about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
  }

  .about-card {
    background: #fff;
    border: 1px solid rgba(200, 120, 30, 0.15);
    border-radius: 16px;
    padding: 32px 28px;
    border-top: 4px solid var(--saffron);
  }

  .about-card-icon {
    font-size: 32px;
    margin-bottom: 16px;
  }

  .about-card-title {
    font-family: 'Cinzel', serif;
    font-size: 17px;
    font-weight: 700;
    color: var(--stone);
    margin-bottom: 10px;
  }

  .about-card-text {
    font-size: 14px;
    color: #5C3010;
    line-height: 1.75;
    font-weight: 300;
  }

  .about-card-text strong {
    color: var(--stone);
    font-weight: 700;
  }

  /* ── HOW IT WORKS ── */
  .steps-section {
    background: #fff;
  }

  .steps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 0;
  }

  .step-item {
    position: relative;
    padding: 36px 32px;
  }

  .step-item:not(:last-child) {
    border-right: 1px solid rgba(200, 120, 30, 0.12);
  }

  .step-num {
    font-family: 'Cinzel', serif;
    font-size: 56px;
    font-weight: 900;
    color: rgba(200, 90, 10, 0.08);
    line-height: 1;
    margin-bottom: -8px;
  }

  .step-title {
    font-family: 'Cinzel', serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--stone);
    margin-bottom: 10px;
  }

  .step-text {
    font-size: 13.5px;
    color: #5C3010;
    line-height: 1.7;
    font-weight: 300;
  }

  .step-text strong {
    color: var(--saffron);
    font-weight: 700;
  }

  .step-divider {
    display: none;
  }

  /* ── OPTIONS SECTION ── */
  .options-section {
    background: linear-gradient(135deg, #FFF8EC, #FFFBF2);
  }

  .options-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 28px;
  }

  .option-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(200, 120, 30, 0.15);
    transition: transform 0.25s;
  }

  .option-card:hover {
    transform: translateY(-4px);
  }

  .option-card-header {
    padding: 32px 32px 24px;
  }

  .option-card-header.primary {
    background: linear-gradient(135deg, #C8590A, #E8760A);
  }

  .option-card-header.secondary {
    background: linear-gradient(135deg, #166534, #15803d);
  }

  .option-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 14px;
  }

  .option-title {
    font-family: 'Cinzel', serif;
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 8px;
  }

  .option-tagline {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 300;
  }

  .option-body {
    padding: 28px 32px;
  }

  .option-points {
    list-style: none;
  }

  .option-points li {
    display: flex;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 14px;
    color: #3C1A08;
    line-height: 1.65;
  }

  .option-points li::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--saffron);
    flex-shrink: 0;
    margin-top: 8px;
  }

  .option-points li.green::before {
    background: var(--green);
  }

  .option-cta {
    margin-top: 24px;
  }

  .btn-option-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--saffron);
    color: #fff;
    padding: 13px 28px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.2s;
  }

  .btn-option-primary:hover {
    background: #a8470a;
    transform: translateY(-1px);
  }

  .btn-option-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--green);
    color: #fff;
    padding: 13px 28px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.2s;
  }

  .btn-option-secondary:hover {
    background: #14532d;
    transform: translateY(-1px);
  }

  /* ── PERKS SECTION ── */
  .perks-section {
    background: var(--warm);
  }

  .perks-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
  }

  .perk-card {
    background: #fff;
    border-radius: 14px;
    padding: 28px 24px;
    border: 1px solid rgba(200, 120, 30, 0.12);
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .perk-icon-wrap {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(200, 90, 10, 0.12), rgba(200, 150, 42, 0.1));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
  }

  .perk-title {
    font-family: 'Cinzel', serif;
    font-size: 15px;
    font-weight: 700;
    color: var(--stone);
  }

  .perk-text {
    font-size: 13.5px;
    color: #5C3010;
    line-height: 1.7;
    font-weight: 300;
  }

  .perk-text strong {
    color: var(--saffron);
    font-weight: 700;
  }

  /* ── MAYAPUR STALL ── */
  .stall-section {
    background: linear-gradient(135deg, #0a3d1a, #0f5c2a);
  }

  .stall-inner {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
  }

  .stall-icon {
    font-size: 52px;
    margin-bottom: 20px;
  }

  .stall-title {
    font-family: 'Cinzel', serif;
    font-size: clamp(22px, 3.5vw, 36px);
    font-weight: 700;
    color: #FFD580;
    margin-bottom: 16px;
  }

  .stall-text {
    font-size: clamp(14px, 1.6vw, 17px);
    color: rgba(255, 235, 200, 0.85);
    font-weight: 300;
    line-height: 1.8;
    margin-bottom: 32px;
  }

  .stall-text strong {
    color: #FFD580;
    font-weight: 700;
  }

  .stall-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 14px 28px;
  }

  .stall-badge-text {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
  }

  /* ── PAYMENT STEPS ── */
  .payment-section {
    background: #fff;
  }

  .payment-steps {
    display: flex;
    flex-direction: column;
    gap: 0;
    max-width: 760px;
    margin: 0 auto;
  }

  .payment-step {
    display: flex;
    gap: 24px;
    padding: 28px 0;
    border-bottom: 1px solid rgba(200, 120, 30, 0.1);
  }

  .payment-step:last-child {
    border-bottom: none;
  }

  .payment-step-num {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--saffron), var(--gold));
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cinzel', serif;
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
    margin-top: 4px;
  }

  .payment-step-content {}

  .payment-step-title {
    font-family: 'Cinzel', serif;
    font-size: 17px;
    font-weight: 700;
    color: var(--stone);
    margin-bottom: 6px;
  }

  .payment-step-text {
    font-size: 14px;
    color: #5C3010;
    line-height: 1.7;
    font-weight: 300;
  }

  .payment-step-text strong {
    color: var(--saffron);
    font-weight: 700;
  }

  /* ── WALL VISUAL ── */
  .wall-section {
    background: linear-gradient(135deg, #1a0800, #2d1200, #1a0800);
    padding: 80px 20px;
  }

  .wall-inner {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
  }

  .wall-title-cursive {
    font-family: 'Dancing Script', cursive;
    font-size: clamp(20px, 3vw, 32px);
    color: rgba(255, 210, 120, 0.75);
    margin-bottom: 8px;
  }

  .wall-title {
    font-family: 'Cinzel', serif;
    font-size: clamp(28px, 5vw, 52px);
    font-weight: 900;
    color: var(--gold-light);
    margin-bottom: 24px;
  }

  .wall-desc {
    font-size: clamp(14px, 1.6vw, 17px);
    color: rgba(255, 235, 200, 0.8);
    font-weight: 300;
    line-height: 1.8;
    margin-bottom: 40px;
  }

  .wall-desc strong {
    color: var(--gold-light);
    font-weight: 700;
  }

  .wall-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 16px;
    margin-bottom: 40px;
  }

  .wall-tier {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 180, 40, 0.2);
    border-radius: 12px;
    padding: 24px 20px;
    text-align: center;
  }

  .wall-tier-amount {
    font-family: 'Cinzel', serif;
    font-size: 26px;
    font-weight: 700;
    color: var(--gold-light);
    margin-bottom: 6px;
  }

  .wall-tier-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: rgba(255, 200, 100, 0.5);
    margin-bottom: 12px;
  }

  .wall-tier-appearances {
    font-size: 13px;
    color: rgba(255, 220, 160, 0.8);
  }

  .wall-tier-appearances strong {
    color: #4eff8a;
    font-weight: 700;
  }

  .wall-cta-row {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
  }


  /* ── WHATSAPP ── */
  .whatsapp-strip {
    background: #25D366;
    padding: 24px 20px;
  }

  .whatsapp-inner {
    max-width: 700px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
    text-align: center;
  }

  .whatsapp-icon {
    font-size: 28px;
  }

  .whatsapp-text {
    font-size: 15px;
    color: #fff;
    font-weight: 600;
  }

  .whatsapp-text span {
    font-weight: 300;
  }

  /* ── FAQ ── */
  .faq-section {
    background: var(--warm);
  }

  .faq-list {
    max-width: 760px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .faq-item {
    background: #fff;
    border: 1px solid rgba(200, 120, 30, 0.15);
    border-radius: 12px;
    overflow: hidden;
  }

  .faq-q {
    padding: 20px 24px;
    font-size: 15px;
    font-weight: 700;
    color: var(--stone);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
  }

  .faq-q:hover {
    background: rgba(200, 90, 10, 0.03);
  }

  .faq-arrow {
    font-size: 18px;
    color: var(--saffron);
    transition: transform 0.3s;
    flex-shrink: 0;
  }

  .faq-a {
    padding: 0 24px 20px;
    font-size: 14px;
    color: #5C3010;
    line-height: 1.75;
    font-weight: 300;
    display: none;
  }

  .faq-item.open .faq-a {
    display: block;
  }

  .faq-item.open .faq-arrow {
    transform: rotate(180deg);
  }

  /* ── FOOTER CTA ── */
  .footer-cta {
    background: linear-gradient(135deg, #C8590A, #E8760A, #C8972A);
    padding: 80px 20px;
    text-align: center;
  }

  .footer-cta-title {
    font-family: 'Cinzel', serif;
    font-size: clamp(24px, 4vw, 46px);
    font-weight: 900;
    color: #fff;
    margin-bottom: 16px;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  }

  .footer-cta-text {
    font-size: clamp(14px, 1.6vw, 17px);
    color: rgba(255, 255, 255, 0.88);
    font-weight: 300;
    margin-bottom: 36px;
  }

  .footer-cta-btns {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .btn-white {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #fff;
    color: var(--saffron);
    padding: 16px 40px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.25s;
  }

  .btn-white:hover {
    transform: translateY(-2px);
  }

  .btn-white-ghost {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: #fff;
    border: 2px solid rgba(255, 255, 255, 0.6);
    padding: 16px 40px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.25s;
  }

  .btn-white-ghost:hover {
    border-color: #fff;
    transform: translateY(-2px);
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 768px) {
    .hero-inner {
      width: 100%;
      max-width: 100%;
      margin: 0 auto;

      padding: 80px 16px 40px;

      display: flex;
      flex-direction: column;
      align-items: center;

      text-align: center;
    }
  }

  section {
    padding: 48px 16px;
  }

  .step-item:not(:last-child) {
    border-right: none;
    border-bottom: 1px solid rgba(200, 120, 30, 0.12);
  }

  .counter-strip {
    padding: 28px 16px;
  }

  .counter-inner {
    width: 100%;
  }

  .counter-label {
    gap: 6px;
  }

  .counter-label-text {
    font-size: 9px;
    letter-spacing: 1.5px;
    text-align: center;
  }

  .counter-digits {
    gap: 3px;
  }

  .digit-box {
    width: 34px;
    height: 44px;
    font-size: 22px;
    border-radius: 6px;
  }

  .digit-comma {
    font-size: 16px;
    padding-bottom: 5px;
  }

  .counter-progress-row {
    max-width: 100%;
    padding: 0 8px;
    gap: 8px;
    flex-wrap: nowrap;
    box-sizing: border-box;
  }

  .counter-bar-bg {
    flex: 1;
    min-width: 0;
  }

  .counter-bar-fill {
    min-width: 0;
  }

  .counter-pct {
    font-size: 10px;
    white-space: nowrap;
    flex-shrink: 0;
  }
  }
</style>

<body class="bg-stone-50 text-stone-800 antialiased" style="font-family: 'Google Sans Flex', sans-serif" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 40)">


  {{-- ✅ Header at page level: fixed nav stays visible across ALL sections --}}
  @include("partials.header")

  <!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-bg">

    </div>
    <div class="hero-inner">
      <p class="hero-cursive">Srila Bhaktivinoda Thakur's</p>
      <h1 class="hero-title">Wall of Legacy</h1>
      <p class="hero-sub">3-Month Fundraising Campaign 2026</p>
      <div class="hero-dates">
        <span class="hero-dates-dot"></span>
        <span class="hero-dates-text">March 29 — June 30, 2026</span>
      </div>
      <p class="hero-desc">
        Join the <strong>100,000 devotee mission</strong> and become the first to get your name permanently etched on the
        <strong>Srila Bhaktivinoda Thakur's Wall of Legacy.</strong>
      </p>
      <div class="hero-btns">
        <a href="https://wall.birnagar.org/web-app" class="btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M5 12h14" />
          </svg>
          Claim your spot!
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     LIVE COUNTER STRIP
══════════════════════════════════════════ -->
  <!-- <div class="counter-strip">
  <div class="counter-inner">
    <div class="counter-label">
      <span class="live-dot"></span>
      <span class="counter-label-text">Devotees who have joined the Wall of Legacy</span>
    </div>
    <div class="counter-digits" id="pageDevDigits"></div>
    <div class="counter-progress-row">
      <div class="counter-bar-bg">
        <div class="counter-bar-fill" id="pageDevBar"></div>
      </div>
      <span class="counter-pct"><strong id="pageDevPct">0%</strong> of 100,000</span>
    </div>
  </div>
</div> -->

  <!-- ══════════════════════════════════════════
     SECTION 1 — ABOUT THE CAMPAIGN
══════════════════════════════════════════ -->
  <section class="about-section">
    <div class="section-inner">
      <div class="section-tag">
        <div class="section-tag-line"></div><span class="section-tag-text">About the Campaign</span>
      </div>
      <h2 class="section-title">What is the <span>Wall of Legacy?</span></h2>
      <p class="section-lead">A sacred initiative to build temple in Birnagar dedicated to Srila Bhaktivinoda Thakur funded by 100,000 devoted hearts.</p>
      <div class="about-grid">
        <div class="about-card">
          <div class="about-card-icon">🏛️</div>
          <div class="about-card-title">The Mission</div>
          <div class="about-card-text">We are raising <strong>₹10 Crore</strong> to build a temple complex in Birnagar for honouring Srila Bhaktivinoda Thakur — one of the greatest Vaishnava saints of the modern age.</div>
        </div>
        <div class="about-card">
          <div class="about-card-icon">🪨</div>
          <div class="about-card-title">The Wall of Legacy</div>
          <div class="about-card-text">A permanent mosaic wall inside the temple museum where the names of all <strong>100,000 donors</strong> will be etched — forming a living tribute that will stand for generations.</div>
        </div>
        <div class="about-card">
          <div class="about-card-icon">🙏</div>
          <div class="about-card-title">Why 100,000 Devotees?</div>
          <div class="about-card-text">Rather than relying on a few large donors, this campaign invites <strong>100,000 devotees</strong> to each contribute a minimum of ₹1,000 — making every devotee a true founding supporter.</div>
        </div>
        <div class="about-card">
          <div class="about-card-icon">📅</div>
          <div class="about-card-title">Campaign Timeline</div>
          <div class="about-card-text">The campaign runs for <strong>3 months only</strong> — from March 29 to June 30th, 2026. After this date, the Wall of Legacy will be closed and no new names can be added.</div>
        </div>
        <div class="about-card">
          <div class="about-card-icon">📍</div>
          <div class="about-card-title">Where is Birnagar?</div>
          <div class="about-card-text">Birnagar is the birthplace of Srila Bhaktivinoda Thakur, located in West Bengal, India. This temple will serve as a pilgrimage site and cultural museum for devotees worldwide.</div>
        </div>
        <div class="about-card">
          <div class="about-card-icon">🌍</div>
          <div class="about-card-title">Open to All</div>
          <div class="about-card-text">This campaign is open to everyone <strong>worldwide</strong>. Whether you are in India or abroad, you can participate online and secure your name on the Wall of Legacy.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     CHAIRMAN'S MESSAGE
══════════════════════════════════════════ -->
  <section style="background: #6B2D0E; padding: 80px 20px;">
    <div style="max-width: 900px; margin: 0 auto;">

      {{-- Section tag --}}
      <div style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,150,60,0.15); border:1px solid rgba(255,150,60,0.3); border-radius:6px; padding:5px 14px; margin-bottom:20px; margin-left:auto; margin-right:auto;">
        <div style="width:20px; height:1.5px; background:#C8590A;"></div>
        <span style="font-size:10px; text-transform:uppercase; letter-spacing:3px; color:#FFB870; font-weight:700;">A Message from the Project Director</span>
      </div>

      {{-- Title --}}
      <h2 style="font-family:'Cinzel',serif; font-size:clamp(24px,4vw,40px); font-weight:700; color:#FFD580; margin-bottom:40px; line-height:1.2; text-align:center;">
        Why This Temple <span style="color:#FFA040;">Must Be Built</span>
      </h2>

      {{-- Two column layout: photo left, text right --}}
      <div style="display:flex; gap:48px; align-items:flex-start; flex-wrap:wrap; justify-content:center;">


        {{-- Photo column --}}
        <div style="flex-shrink:0; text-align:center; width:220px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
          <div style="width:200px; height:240px; border-radius:16px; overflow:hidden; border:3px solid #C8590A; box-shadow:0 8px 32px rgba(200,90,10,0.2); margin:0 auto 16px;">
            <img
              src="{{ asset('images/chairman.jpeg') }}"
              alt="Chairman"
              style="width:100%; height:100%; object-fit:cover; object-position:top;" />
          </div>
          <p style="font-family:'Cinzel',serif; font-size:14px; font-weight:700; color:#FFD580; margin-bottom:4px;">
            Vaikunthapati das
          </p>
          <p style="font-size:11px; text-transform:uppercase; letter-spacing:2px; color:#FFA040;">
            Project Director, Birnagar Temple Project
          </p>
        </div>

        {{-- Write-up column --}}
        <div style="flex:1; min-width:260px;">

          {{-- Opening quote --}}
          <div style="border-left:3px solid #FFA040; padding-left:20px; margin-bottom:24px;">
            <p style="font-family:'Georgia',serif; font-size:clamp(16px,2vw,20px); color:rgba(255,235,200,0.95); font-style:italic; line-height:1.7; margin:0;">
              "This is not merely a construction project. It is a sacred debt we owe to Srila Bhaktivinoda Thakur — a saint who gave his entire life so that the holy name could reach every corner of the world."
            </p>
          </div>

          {{-- Body paragraphs --}}
          <p style="font-size:clamp(14px,1.5vw,16px); color:rgba(255,220,180,0.85); line-height:1.85; font-weight:300; margin-bottom:16px;">
            Birnagar is the birthplace of one of the greatest Vaishnava saints of the modern era. For decades, devotees have dreamed of building a temple there worthy of his legacy — a place where pilgrims from around the world can come to pay their respects, learn his teachings, and feel his presence.
          </p>

          <p style="font-size:clamp(14px,1.5vw,16px); color:rgba(255,220,180,0.85); line-height:1.85; font-weight:300; margin-bottom:16px;">
            The Wall of Legacy campaign is our answer to that dream. We are not asking a handful of wealthy donors to fund this alone. We are inviting <strong style="color:#FFD580;">one lakh devoted hearts</strong> to each contribute one spiritual share — so that when this temple stands, every one of them can say: <em>"I helped build this."</em>
          </p>

          <p style="font-size:clamp(14px,1.5vw,16px); color:rgba(255,220,180,0.85); line-height:1.85; font-weight:300; margin-bottom:28px;">
            The campaign closes on June 30, 2026. The window is short and the wall has limited space. I urge every devotee who feels the call of Srila Bhaktivinoda Thakur's mercy to come forward now and claim their place in this eternal legacy.
          </p>

          {{-- Signature --}}
          <div style="display:flex; align-items:center; gap:16px; padding-top:20px; border-top:1px solid rgba(200,120,30,0.2);">
            <div>
              <p style="font-family:'Dancing Script',cursive; font-size:22px; color:#FFA040; margin:0 0 2px;">
                Vaikunthapati das
              </p>
              <p style="font-size:11px; text-transform:uppercase; letter-spacing:2px; color:rgba(255,200,140,0.7); margin:0;">
                Project Director &nbsp;·&nbsp; Birnagar Temple Project
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECTION 3 — WALL TIERS
══════════════════════════════════════════ -->
  <section class="wall-section">
    <div class="wall-inner">
      <p class="wall-title-cursive">Srila Bhaktivinoda Thakur's</p>
      <h2 class="wall-title">Wall of Legacy — Name Appearances</h2>
      <p class="wall-desc">
        The more you contribute, the more times your name appears on the Wall of Legacy.
        Every contribution is in <strong>multiples of ₹1,000</strong> — each ₹1,000 secures one appearance.
      </p>
      <div class="wall-grid">
        <div class="wall-tier">
          <div class="wall-tier-amount">₹1,000</div>
          <div class="wall-tier-label">Minimum</div>
          <div class="wall-tier-appearances"><strong>1 time</strong> your name appears</div>
        </div>
        <div class="wall-tier">
          <div class="wall-tier-amount">₹5,000</div>
          <div class="wall-tier-label">Five-Fold</div>
          <div class="wall-tier-appearances"><strong>5 times</strong> your name appears</div>
        </div>
        <div class="wall-tier">
          <div class="wall-tier-amount">₹10,000</div>
          <div class="wall-tier-label">Ten-Fold</div>
          <div class="wall-tier-appearances"><strong>10 times</strong> your name appears</div>
        </div>
        <div class="wall-tier">
          <div class="wall-tier-amount">₹50,000</div>
          <div class="wall-tier-label">Fifty-Fold</div>
          <div class="wall-tier-appearances"><strong>50 times</strong> your name appears</div>
        </div>
        <!-- <div class="wall-tier">
        <div class="wall-tier-amount">₹100,000</div>
        <div class="wall-tier-label">One-Hundred-Fold</div>
        <div class="wall-tier-appearances"><strong>100 times</strong> your name appears</div>
      </div> -->
      </div>
      <div class="wall-cta-row">
        <a href="https://wall.birnagar.org/web-app" class="btn-primary">Claim My Spot Now</a>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════════════════
     SECTION 4 — HOW PARTICIPATION WORKS
══════════════════════════════════════════ -->
  <section class="payment-section" id="payment-steps">
    <div class="section-inner">
      <div class="section-tag">
        <div class="section-tag-line"></div><span class="section-tag-text">Step by Step</span>
      </div>
      <h2 class="section-title">How to <span>Participate</span></h2>
      <p class="section-lead">Follow these simple steps to secure your name on the Wall of Legacy. The entire process takes less than 3 minutes.</p>
      <div class="payment-steps">
        <div class="payment-step">
          <div class="payment-step-num">1</div>
          <div class="payment-step-content">
            <div class="payment-step-title">Start with a minimum donation of ₹1,000</div>
            <div class="payment-step-text">A contribution of <strong>₹1,000</strong> secures your spot on the Srila Bhaktivinoda Thakur Wall of Legacy. This is the minimum amount required to have your name etched permanently on the wall. You can contribute more in multiples of ₹1,000.</div>
          </div>
        </div>
        <div class="payment-step">
          <div class="payment-step-num">2</div>
          <div class="payment-step-content">
            <div class="payment-step-title">More you give, more times your name appears</div>
            <div class="payment-step-text">For every <strong>₹1,000</strong> you contribute, your name appears once on the wall. Donate ₹5,000 and your name appears 5 times. Donate ₹10,000 and it appears 10 times — across different blocks on the wall.</div>
          </div>
        </div>
        <div class="payment-step">
          <div class="payment-step-num">3</div>
          <div class="payment-step-content">
            <div class="payment-step-title">Click on the Donate Now button</div>
            <div class="payment-step-text">Click the <strong>Donate Now</strong> button on this page to begin the donation process. You will be directed to our secure donation form.</div>
          </div>
        </div>
        <div class="payment-step">
          <div class="payment-step-num">4</div>
          <div class="payment-step-content">
            <div class="payment-step-title">Select your block on the Wall of Legacy</div>
            <div class="payment-step-text">The wall is divided into <strong>numbered blocks</strong>. Choose the block where you would like your name to appear. Blocks fill up on a first-come, first-served basis — so choose early for the best positions.</div>
          </div>
        </div>
        <div class="payment-step">
          <div class="payment-step-num">5</div>
          <div class="payment-step-content">
            <div class="payment-step-title">Enter your details and select your amount</div>
            <div class="payment-step-text">Fill in your <strong>name as you would like it to appear</strong> on the wall, along with your contact details and WhatsApp number for your receipt. Then select your donation amount.</div>
          </div>
        </div>
        <div class="payment-step">
          <div class="payment-step-num">6</div>
          <div class="payment-step-content">
            <div class="payment-step-title">Pay securely</div>
            <div class="payment-step-text">Click <strong>Pay Now</strong> and complete your payment via UPI, Credit/Debit Card or Net Banking.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     PERKS
══════════════════════════════════════════ -->
  <!-- <section class="perks-section">
  <div class="section-inner">
    <div class="section-tag"><div class="section-tag-line"></div><span class="section-tag-text">What You Receive</span></div>
    <h2 class="section-title">Every Devotee <span>Gets</span></h2>
    <p class="section-lead">Your contribution is not just a donation — it is a permanent spiritual offering that comes with lasting recognition.</p>
    <div class="perks-grid">
      <div class="perk-card">
        <div class="perk-icon-wrap">🪨</div>
        <div class="perk-title">Name on the Wall</div>
        <div class="perk-text">Your name permanently etched on the <strong>Srila Bhaktivinoda Thakur Wall of Legacy</strong> inside the Birnagar Temple Museum.</div>
      </div>
      <div class="perk-card">
        <div class="perk-icon-wrap">📍</div>
        <div class="perk-title">Choose Your Block</div>
        <div class="perk-text">You get to <strong>select the block</strong> on the wall where your name appears. First-come, first-served — the earlier you donate, the better your choice.</div>
      </div>
      <div class="perk-card">
        <div class="perk-icon-wrap">📱</div>
        <div class="perk-title">Instant WhatsApp Receipt</div>
        <div class="perk-text">Receive your official donation <strong>receipt immediately on WhatsApp</strong> the moment your payment is confirmed — no waiting, no delays.</div>
      </div>
      <div class="perk-card">
        <div class="perk-icon-wrap">🏛️</div>
        <div class="perk-title">Founding Supporter Status</div>
        <div class="perk-text">Be recognised as a <strong>Founding Supporter</strong> of the Birnagar Temple — a title of honour that will be recorded in the temple's history.</div>
      </div>
      <div class="perk-card">
        <div class="perk-icon-wrap">🔭</div>
        <div class="perk-title">Telescope Experience</div>
        <div class="perk-text">When visiting the museum, use the <strong>viewing telescope</strong> placed in front of the wall to find your own name among the 100,000 devoted hearts.</div>
      </div>
      <div class="perk-card">
        <div class="perk-icon-wrap">🌸</div>
        <div class="perk-title">Spiritual Merit</div>
        <div class="perk-text">Contribute to a sacred cause in the name of <strong>Srila Bhaktivinoda Thakur</strong> — a blessing that extends to you and your entire family lineage.</div>
      </div>
    </div>
  </div>
</section> -->

  <!-- ══════════════════════════════════════════
     MAYAPUR STALL
══════════════════════════════════════════ -->
  <section class="stall-section">
    <div class="stall-inner">
      <div class="stall-icon">🪷</div>
      <h2 class="stall-title">Visiting Mayapur? Donate In Person</h2>
      <p class="stall-text">
        If you are currently in <strong>Mayapur</strong>, you are welcome to visit our dedicated stall located near the temple and make your donation personally. Our team will assist you with block selection, fill in your details, and view your name on the digital wall on the spot.
        <br /><br />
        This is a wonderful opportunity to connect with fellow devotees and be part of this sacred mission face to face.
      </p>
      <div class="stall-badge">
        <span style="font-size:20px;">📍</span>
        <span class="stall-badge-text">Our Stall is Near the Mayapur Temple &nbsp;·&nbsp; Open Daily During Campaign Period</span>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     WHATSAPP STRIP
══════════════════════════════════════════ -->
  <!-- <div class="whatsapp-strip">
  <div class="whatsapp-inner">
    <span class="whatsapp-icon">💬</span>
    <span class="whatsapp-text">Instant Receipt on WhatsApp &nbsp;<span>— Your official donation receipt is sent to you the moment payment is confirmed.</span></span>
  </div>
</div> -->

  <!-- ══════════════════════════════════════════
     FAQ
══════════════════════════════════════════ -->
  <section class="faq-section">
    <div class="section-inner">
      <div class="section-tag">
        <div class="section-tag-line"></div><span class="section-tag-text">Common Questions</span>
      </div>
      <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-q">What is the minimum donation amount? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">The minimum donation is <strong>₹1,000</strong>. This secures one appearance of your name on the Srila Bhaktivinoda Thakur Wall of Legacy. You can contribute more in multiples of ₹1,000.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Can I donate on behalf of a family member or in someone's name? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">Yes, absolutely. During the donation process you can enter the name of whoever you would like to appear on the wall — it does not have to be your own name. Many devotees donate in the name of a parent, child, or spiritual teacher.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">How many times can my name appear on the wall? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">For every ₹1,000 you contribute, your name appears once. So if you donate ₹5,000 your name will appear 5 times, and for ₹10,000 it will appear 10 times — across different blocks on the wall.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Can I choose where on the wall my name appears? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">Yes. After completing your payment you will be able to select the numbered block on the wall where your name will be placed. Blocks are allocated on a first-come, first-served basis.</div>
        </div>
        <!-- <div class="faq-item">
        <div class="faq-q">When will I receive my receipt? <span class="faq-arrow">&#8964;</span></div>
        <div class="faq-a">Your official receipt will be sent to your WhatsApp number immediately after your payment is confirmed — usually within a few seconds of completing the transaction.</div>
      </div> -->
        <div class="faq-item">
          <div class="faq-q">What payment methods are accepted? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">We accept UPI, Credit/Debit Card and Net Banking. All payments are processed through a secure payment gateway.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">I pledged but have not paid yet — what should I do? <span class="faq-arrow">&#8964;</span></div>
          <div class="faq-a">You will receive a WhatsApp reminder before the campaign closes on June 30, 2026. You can complete your donation at any time before that date. After June 30 the Wall of Legacy will be closed permanently.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     FOOTER CTA
══════════════════════════════════════════ -->
  <script>
    (function() {
      var CURRENT = 0,
        TARGET = 100000;

      function buildDigits(num, containerId) {
        var c = document.getElementById(containerId);
        if (!c) return;
        var str = num.toLocaleString('en-IN');
        c.innerHTML = '';
        for (var i = 0; i < str.length; i++) {
          if (str[i] === ',') {
            var cm = document.createElement('span');
            cm.className = 'digit-comma';
            cm.textContent = ',';
            c.appendChild(cm);
          } else {
            var bx = document.createElement('div');
            bx.className = 'digit-box';
            bx.textContent = str[i];
            c.appendChild(bx);
          }
        }
      }

      buildDigits(CURRENT, 'pageDevDigits');

      setTimeout(function() {
        var pct = Math.round((CURRENT / TARGET) * 100);
        var bar = document.getElementById('pageDevBar');
        var lbl = document.getElementById('pageDevPct');
        if (bar) bar.style.width = pct + '%';
        if (lbl) lbl.textContent = pct + '%';
      }, 400);

      document.querySelectorAll('.faq-q').forEach(function(q) {
        q.addEventListener('click', function() {
          var item = this.closest('.faq-item');
          var wasOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(function(i) {
            i.classList.remove('open');
          });
          if (!wasOpen) item.classList.add('open');
        });
      });
    })();
  </script>
</body>
@endsection