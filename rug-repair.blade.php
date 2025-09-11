<?php use Illuminate\Support\Str; ?>
@include('inc.header',[
            'title' => 'Area Rug Repair Services - Professional Rug Repair',
            'description' => 'Professional area rug repair services in New York. Expert rug repair, restoration, and maintenance. Call us for free consultation.',
            'active_page' => 'area_rug',
    ])

    <style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;500;700&display=swap');
/* Hero Section Styles */
.hero-section {
    width: 100%;
    position: relative;
    background-image: url('/images/services images/hero section/area rug repair feature image.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 494px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 20px;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.hero-heading {
    width: 626px;
    position: relative;
    font-size: 55px;
    line-height: 127%;
    display: flex;
    font-family: 'Open Sans Condensed';
    color: #fff;
    text-align: center;
    align-items: center;
    height: 125px;
    margin-bottom: 20px;
}

/* Provided class names from Figma */
.top-rated-area-rug-container {
    width: 626px !important;
    position: relative !important;
    font-size: 55px !important;
    line-height: 127% !important;
    display: flex !important;
    font-family: 'Open Sans Condensed' !important;
    color: #fff !important;
    text-align: center !important;
    align-items: center !important;
    height: 125px !important;
}
.rated-area-rug-top-rated-area-rug-container { width: 100% !important; }
.top-rated-area-rug { margin: 0 !important; font-size: inherit !important; line-height: inherit !important; font-family: inherit !important; color: inherit !important; display: block; }

.hero-heading span {
    width: 100%;
}

.hero-heading p {
    margin: 0;
}

.hero-subheading {
    width: 571px;
    position: relative;
    font-size: 20px;
    line-height: 38px;
    font-weight: 500;
    font-family: 'Open Sans', sans-serif;
    color: #fff;
    text-align: center;
    display: inline-block;
    height: 38px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.hero-button {
    width: 200px;
    position: relative;
    border-radius: 25px;
    background-color: #0263d4;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-top: 30px;
}

.hero-button:hover {
    background-color: #0252b3;
}

.hero-button-text {
    width: 74px;
    position: relative;
    font-size: 18px;
    font-family: 'Open Sans', sans-serif;
    color: #fff;
    text-align: center;
    display: inline-block;
}

/* Mobile Responsive Styles for Hero Section */
@media (max-width: 768px) {
    .hero-section {
        height: 400px;
        padding: 0 15px;
    }
    
    .hero-heading {
        width: 100%;
        font-size: 32px;
        line-height: 1.2;
        height: auto;
        min-height: 80px;
        margin-bottom: 15px;
    }
    
    .top-rated-area-rug-container {
        width: 100% !important;
        font-size: 32px !important;
        line-height: 1.2 !important;
        height: auto !important;
        min-height: 80px !important;
    }
    
    .hero-subheading {
        width: 100%;
        font-size: 16px;
        line-height: 1.4;
        height: auto;
        margin-top: 20px;
        margin-bottom: 5px;
    }
    
    .hero-button {
        width: 180px;
        height: 45px;
        margin-top: 20px;
    }
    
    .hero-button-text {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .hero-section {
        height: 350px;
    }
    
    .hero-heading {
        font-size: 28px;
        min-height: 70px;
        margin-bottom: 10px;
    }
    
    .top-rated-area-rug-container {
        font-size: 28px !important;
        min-height: 70px !important;
    }
    
    .hero-subheading {
        font-size: 14px;
        margin-top: 15px;
    }
    
    .hero-button {
        width: 160px;
        height: 40px;
    }
    
    .hero-button-text {
        font-size: 14px;
    }
}

@media (max-width: 360px) {
    .hero-section {
        height: 300px;
    }
    
    .hero-heading {
        font-size: 24px;
        min-height: 60px;
    }
    
    .top-rated-area-rug-container {
        font-size: 24px !important;
        min-height: 60px !important;
    }
    
    .hero-subheading {
        font-size: 13px;
        margin-top: 10px;
    }
    
    .hero-button {
        width: 140px;
        height: 38px;
    }
}

/* Cleaning Process Section */
.cleaning-process-section { background: #f7f9fc; padding: 60px 0; }
.cleaning-process-container { max-width: 1140px; margin: 0 auto; padding: 0 15px; }

/* Heading (uses your provided measurements) */
.our-step-by-step-area-container {
    width: 804px;
    position: relative;
    font-size: 38px;
    line-height: 54px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 55px;
    color: #000;
    margin: 0 auto 30px auto;
}
.our-step-by-step-area-our-step-by-step-area-container { width: 100%; }
.area-rug { color: #0263d4; }

/* Cards grid */
.cleaning-cards { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 24px; }
@media (max-width: 992px) { .cleaning-cards { grid-template-columns: repeat(2, 1fr); } }
/* Mobile: show two cards per row */
@media (max-width: 576px) { .cleaning-cards { grid-template-columns: repeat(2, 1fr); } }

/* Card styles (matching your sizes) */
.cleaning-card {
    width: 100%;
    position: relative;
    border-radius: 16px;
    background-color: #fff;
    height: 248px;
    box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    border: 1px solid #eef2f7;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 28px 16px;
}

/* Circle + icon */
.cleaning-icon-circle {
    width: 65px; 
    height: 65px;
    box-shadow: 0px 4px 40px rgba(33, 123, 255, 0);
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid rgba(33, 123, 255, 0.21);
    box-sizing: border-box;
    display: flex; 
    align-items: center; 
    justify-content: center;
    margin-bottom: 16px;
    position: relative;
}
.cleaning-icon-circle img {
    max-width: 32px; 
    max-height: 32px; 
    object-fit: contain;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* Title and description (your measurements) */
.inspection-dust, .cleaning-title, .stain-odor-title, .drying-grooming-title {
    width: 100%; 
    position: relative; 
    font-size: 18px; 
    line-height: 1.2; 
    font-weight: 500;
    font-family: 'Open Sans'; 
    color: #000; 
    text-align: center; 
    display: block; 
    margin-bottom: 8px;
    min-height: 22px;
}
.thorough-rug-checkup, .cleaning-desc, .stain-odor-desc, .drying-grooming-desc {
    width: 100%; 
    position: relative; 
    font-size: 17px; 
    line-height: 1.4; 
    font-family: 'Open Sans'; 
    color: #6d6d6d; 
    text-align: center; 
    display: block; 
    margin: 0;
    min-height: 48px;
}

/* Responsive tweaks */
@media (max-width: 768px) {
    .our-step-by-step-area-container { width: 100%; font-size: 36px; line-height: 48px; height: auto; }
}
/* Responsive styles for cleaning process cards */
@media (max-width: 768px) {
    .cleaning-card {
        padding: 20px 12px;
        height: auto;
        min-height: 220px;
    }
    
    .cleaning-icon-circle {
        width: 55px;
        height: 55px;
        margin-bottom: 12px;
    }
    
    .cleaning-icon-circle img {
        max-width: 28px;
        max-height: 28px;
    }
    
    .inspection-dust, .cleaning-title, .stain-odor-title, .drying-grooming-title {
        font-size: 16px;
        line-height: 1.3;
        margin-bottom: 6px;
        min-height: 20px;
    }
    
    .thorough-rug-checkup, .cleaning-desc, .stain-odor-desc, .drying-grooming-desc {
        font-size: 14px;
        line-height: 1.4;
        min-height: 40px;
    }
}

@media (max-width: 576px) {
    .cleaning-card {
        padding: 16px 8px;
        min-height: 200px;
    }
    
    .cleaning-icon-circle {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }
    
    .cleaning-icon-circle img {
        max-width: 24px;
        max-height: 24px;
    }
    
    .inspection-dust, .cleaning-title, .stain-odor-title, .drying-grooming-title {
        font-size: 15px;
        line-height: 1.2;
        margin-bottom: 5px;
        min-height: 18px;
    }
    
    .thorough-rug-checkup, .cleaning-desc, .stain-odor-desc, .drying-grooming-desc {
        font-size: 13px;
        line-height: 1.3;
        min-height: 35px;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-heading {
        width: 100%;
        font-size: 40px;
        height: auto;
        min-height: 125px;
    }
    
    .hero-subheading {
        width: 100%;
        font-size: 18px;
        height: auto;
        min-height: 38px;
    }
    
    .hero-section {
        height: 400px;
        padding: 0 15px;
    }
}

@media (max-width: 480px) {
    .hero-heading {
        font-size: 32px;
    }
    
    .hero-subheading {
        font-size: 16px;
    }
    
    .hero-section {
        height: 350px;
    }
}

/* Why Professional Section Styles */
.why-professional-section {
    width: 100%;
    position: relative;
    background-color: #fff;
    height: 558px;
    padding: 60px 0;
}

.why-professional-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    display: flex;
    align-items: center;
    height: 100%;
    gap: 60px;
}

.why-professional-left {
    width: 100%;
    position: relative;
    border: 1px solid #fff;
    box-sizing: border-box;
    height: 558px;
    flex: 1;
}

.why-professional-image-container {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.why-professional-image {
    width: 100%;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    height: 424px;
    object-fit: cover;
    border-radius: 12px;
}

.why-professional-right {
    width: 100%;
    position: relative;
    border: 1px solid #fff;
    box-sizing: border-box;
    height: 558px;
    flex: 1;
    display: flex;
    align-items: center;
}

.why-professional-content {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.why-professional-heading {
    width: 591px;
    position: relative;
    font-size: 50px;
    line-height: 59px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    text-align: left;
    display: flex;
    align-items: center;
    height: 105px;
    color: #000;
}

.why-professional-heading-text {
    width: 100%;
}

.professional {
    color: #0263d4;
}

.why-professional-description {
    width: 100%;
    position: relative;
    font-size: 18px;
    line-height: 22px;
    font-weight: 500;
    font-family: 'Open Sans';
    color: #6d6d6d;
    text-align: justify;
    display: block;
    height: auto;
}

.why-professional-description p {
    margin: 0 0 15px 0;
}

.why-professional-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    width: 100%;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
}

.feature-circle {
    width: 34px;
    position: relative;
    box-shadow: 0px 4px 40px rgba(33, 123, 255, 0);
    border-radius: 50%;
    border: 2px solid rgba(33, 123, 255, 0.21);
    box-sizing: border-box;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon {
    width: 18px;
    height: 18px;
    object-fit: contain;
}

.feature-text {
    font-size: 18px;
    line-height: 30px;
    font-weight: 500;
    font-family: 'Open Sans';
    color: #000;
    text-align: left;
    display: block;
    height: auto;
    flex: 1;
}

/* Responsive styles for why professional section */
@media (max-width: 768px) {
    .why-professional-section {
        height: auto;
        padding: 40px 0;
    }
    
    .why-professional-container {
        flex-direction: column;
        gap: 30px;
        height: auto;
    }
    
    .why-professional-left,
    .why-professional-right {
        height: auto;
        flex: none;
    }
    
    .why-professional-image {
        height: 300px;
    }
    
    .why-professional-heading {
        font-size: 32px;
        line-height: 38px;
        height: auto;
        width: 100%;
        text-align: center;
    }
    
    .why-professional-description {
        font-size: 16px;
        line-height: 26px;
        height: auto;
        width: 100%;
        text-align: left;
    }
    
    .why-professional-features {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .feature-item {
        gap: 12px;
    }
    
    .feature-circle {
        width: 32px;
        height: 32px;
        flex-shrink: 0;
    }
    
    .feature-icon {
        width: 18px;
        height: 18px;
    }
    
    .feature-text {
        font-size: 17px;
        line-height: 26px;
        height: auto;
    }
}

@media (max-width: 576px) {
    .why-professional-section {
        padding: 30px 0;
    }
    
    .why-professional-container {
        gap: 25px;
    }
    
    .why-professional-image {
        height: 250px;
    }
    
    .why-professional-heading {
        font-size: 28px;
        line-height: 34px;
    }
    
    .why-professional-description {
        font-size: 15px;
        line-height: 24px;
    }
    
    .why-professional-features {
        gap: 16px;
    }
    
    .feature-circle {
        width: 28px;
        height: 28px;
    }
    
    .feature-icon {
        width: 16px;
        height: 16px;
    }
    
    .feature-text {
        font-size: 16px;
        line-height: 24px;
    }
}

@media (max-width: 480px) {
    .why-professional-heading {
        font-size: 24px;
        line-height: 30px;
    }
    
    .why-professional-description {
        font-size: 14px;
        line-height: 22px;
    }
    
    .feature-text {
        font-size: 15px;
        line-height: 22px;
    }
}

/* Before & After Section Styles */
.before-after-section {
    background: #f7f7f7;
    padding: 40px 0;
}

.before-after-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.before-after-heading {
    margin-bottom: 10px;
}

.before-after-title {
    font-size: 25px;
    font-weight: 500;
    color: #0263d4;
}

.recent-projects-heading {
    margin-bottom: 40px;
}

.recent-projects-title {
    width: 100%;
    max-width: 600px;
    position: relative;
    font-size: 50px;
    line-height: 85px;
    font-weight: 400;
    font-family: 'Open Sans Condensed';
    text-align: center;
    display: block;
    height: auto;
    min-height: 55px;
    color: #000;
    margin: 0 auto;
}

.recent-projects-by-recent-projects-by-container {
    width: 100%;
}

.projects {
    color: #0263d4;
}

.before-after-content {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.before-after-images {
    width: 100%;
    position: relative;
    border-radius: 17px;
    border: 2px solid #0263d4;
    box-sizing: border-box;
    height: 478px;
    display: flex;
    gap: 0;
    max-width: 100%;
    margin: 0 auto;
    background: #fff;
    overflow: hidden;
    padding: 0;
}

.before-image, .after-image {
    flex: 1;
    position: relative;
    border-radius: 16px;
    border: 1px solid #f7f7f7;
    box-sizing: border-box;
    height: 430px;
    margin: 20px;
    background: #fff;
}

.before-image img, .after-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 16px;
    display: block;
}

.image-label {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(255, 255, 255, 0.9);
    padding: 6px 15px;
    border-radius: 20px;
    font-weight: 500;
    font-size: 14px;
    color: #000;
}

/* Responsive: Before & After */
@media (max-width: 992px) {
    .recent-projects-title {
        font-size: 42px;
        line-height: 64px;
    }
    .before-after-images {
        height: auto;
    }
    .before-image, .after-image {
        height: 370px;
        margin: 18px;
    }
}

@media (max-width: 768px) {
    .why-choose-section { padding: 36px 0; }
    .before-after-section {
        padding: 30px 0;
    }
    .recent-projects-title {
        font-size: 34px;
        line-height: 48px;
        max-width: 520px;
    }
    .before-after-images {
        border-radius: 14px;
        height: auto;
    }
    .before-image, .after-image {
        height: 310px;
        margin: 14px;
        border-radius: 12px;
    }
    .before-image img, .after-image img { border-radius: 12px; }
    .image-label { font-size: 13px; padding: 5px 12px; }
}

@media (max-width: 576px) {
    .why-choose-section { padding: 28px 0; }
    .recent-projects-title {
        font-size: 28px;
        line-height: 38px;
        max-width: 440px;
    }
    .before-after-images {
        height: auto;
        border-width: 2px;
    }
    .before-image, .after-image {
        height: 255px;
        margin: 12px;
    }
    .image-label { font-size: 12px; padding: 4px 10px; top: 10px; left: 10px; }
}

@media (max-width: 420px) {
    .recent-projects-title { font-size: 24px; line-height: 32px; }
    .before-after-images { height: auto; }
    .before-image, .after-image { height: 220px; margin: 10px; }
    .image-label { font-size: 11px; padding: 3px 9px; }
}

/* Why Choose A and B Cleaning Section Styles */
.why-choose-section {
    background: #fff;
    padding: 50px 0;
}

.why-choose-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    display: flex;
    gap: 60px;
    align-items: flex-start;
}

.why-choose-left {
    flex: 1;
    text-align: left;
}

.why-choose-right {
    flex: 1;
}

.why-choose-content {
    max-width: 600px;
    margin: 0;
    text-align: left;
}

.why-choose-heading {
    padding-top: 20px;
    margin-bottom: 8px;
}

.why-choose-title {
    font-size: 40px;
    line-height: 59px;
    font-weight: 400;
    font-family: 'Open Sans Condensed';
    color: #000;
}

/* Blue accent in heading for 'A and B' */
.why-choose-title .a-and-b {
    color: #0263d4;
}

.why-choose-description {
    font-size: 18px;
    line-height: 35px;
    font-weight: 500;
    color: #6d6d6d;
    margin-top: 8px;
    margin-bottom: 0;
}

.why-choose-features {
    text-align: left;
    padding-top: 8px;
}

.why-choose-features .feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 14px;
}

.feature-dot {
    width: 10px;
    height: 10px;
    background: #0263d4;
    border-radius: 50%;
    flex-shrink: 0;
}

.why-choose-features .feature-text {
    font-size: 18px;
    line-height: 28px;
    font-weight: 500;
    color: #000;
}

@media (max-width: 768px) {
    .why-choose-container { flex-direction: column; gap: 30px; }
    .why-choose-content { max-width: 100%; }
}

/* Service Areas Section Styles */
.service-areas-section {
    background: linear-gradient(180deg, rgba(165, 199, 240, 0.39) 99.99%);
    padding: 50px 0;
}

.service-areas-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.service-areas-heading {
    margin-bottom: 20px;
}

.service-areas-title {
    font-size: 25px;
    font-weight: 500;
    color: #0263d4;
}

.service-areas-main-heading {
    margin-bottom: 40px;
}

.service-areas-main-title {
    font-size: 40px;
    line-height: 59px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    color: #000;
}

.service-areas-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.area-item {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.area-link {
    color: #000;
    text-decoration: none;
    font-weight: 500;
}

.area-name {
    font-weight: 500;
    color: #000;
}

.view-all-locations {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
}

.view-all-text {
    font-weight: 500;
    color: #000;
}

.view-all-arrow {
    width: 30px;
    height: 30px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive: Service Areas */
@media (max-width: 992px) {
    .service-areas-section { padding: 40px 0; }
    .service-areas-main-title { font-size: 36px; line-height: 50px; }
}

@media (max-width: 768px) {
    .service-areas-section { padding: 32px 0; }
    .service-areas-main-title { font-size: 32px; line-height: 44px; }
    .service-areas-grid { grid-template-columns: repeat(3, 1fr); gap: 14px; }
}

@media (max-width: 576px) {
    .service-areas-section { padding: 28px 0; }
    .service-areas-main-title { font-size: 28px; line-height: 38px; }
    .service-areas-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
}

.view-all-arrow img {
    width: 15px;
    height: 15px;
}

/* What Make Us Trusted Section Styles */
.what-make-us-trusted-section {
    background: #f7f7f7;
    padding: 80px 0;
}

.what-make-us-trusted-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    display: flex;
    gap: 40px;
    align-items: flex-start;
}

.what-make-us-trusted-left {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.trusted-image img {
    width: 100%;
    height: 520px;
    object-fit: cover;
    border-radius: 12px;
}

.what-make-us-trusted-right {
    flex: 1;
    border: none;
    box-sizing: border-box;
    height: auto;
    border-radius: 0;
    padding: 0;
    background: transparent;
    display: flex;
    flex-direction: column;
    min-height: 520px;
}

.trusted-heading {
    margin-bottom: 16px;
    text-align: left;
    display: flex;
    justify-content: left;
}

.trusted-title {
    font-size: 50px;
    line-height: 85px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    color: #000;
}

.trusted-title .a-and-b {
    color: #0263d4;
}

.trusted-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
    margin-top: auto;
}

.trusted-feature-card {
    background: #fff;
    border-radius: 12px;
    padding: 12px;
    text-align: center;
    box-shadow: 0 3px 12px rgba(0,0,0,0.05);
    border: 1px solid #eef2f7;
}

.trusted-feature-icon {
    margin-bottom: 14px;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 1.5px solid rgba(33, 123, 255, 0.21);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
}

.trusted-feature-icon img {
    width: 22px;
    height: 22px;
    object-fit: contain;
}

.trusted-feature-title {
    font-size: 18px;
    line-height: 28px;
    font-weight: 500;
    color: #000;
    margin-bottom: 6px;
}

.trusted-feature-desc {
    font-size: 15px;
    line-height: 24px;
    color: #6d6d6d;
}

/* Responsive: What Make Us Trusted */
@media (max-width: 768px) {
    .what-make-us-trusted-container {
        flex-direction: column;
        gap: 30px;
        align-items: center;
    }
    
    .what-make-us-trusted-left { align-self: center; }
    .trusted-image { display: flex; justify-content: center; width: 100%; }
    .trusted-image img {
        width: 100%;
        max-width: 360px;
        aspect-ratio: 1 / 1;
        height: auto;
        object-fit: cover;
        margin-left: auto;
        margin-right: auto;
        border-radius: 12px;
    }
    
    .what-make-us-trusted-right {
        min-height: auto;
    }
    
    .trusted-title {
        font-size: 36px;
        line-height: 48px;
        text-align: center;
    }
    
    .trusted-features {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }
    
    .trusted-feature-card {
        padding: 10px;
    }
    
    .trusted-feature-icon {
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }
    
    .trusted-feature-icon img {
        width: 18px;
        height: 18px;
    }
    
    .trusted-feature-title {
        font-size: 16px;
        line-height: 24px;
        margin-bottom: 4px;
    }
    
    .trusted-feature-desc {
        font-size: 14px;
        line-height: 20px;
    }
}

@media (max-width: 576px) {
    .trusted-features {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
    .trusted-image img {
        max-width: 300px;
    }
    
    .trusted-feature-card {
        padding: 8px;
    }
    
    .trusted-feature-icon {
        width: 36px;
        height: 36px;
        margin-bottom: 8px;
    }
    
    .trusted-feature-icon img {
        width: 16px;
        height: 16px;
    }
    
    .trusted-feature-title {
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 3px;
    }
    
    .trusted-feature-desc {
        font-size: 12px;
        line-height: 18px;
    }
}

/* We Are Here To Help You Section Styles */
.we-are-here-section {
    background: #d8e6f5;
    padding: 50px 0;
}

.we-are-here-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.we-are-here-heading {
    margin-bottom: 10px;
}

.we-are-here-title {
    font-size: 30px;
    font-weight: 700;
    color: #0263d4;
}

.we-are-here-main-heading {
    margin-bottom: 24px;
}

.we-are-here-main-title {
    font-size: 50px;
    line-height: 85px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    color: #000;
}

.we-are-here-main-title .a-and-b { color: #0263d4; }

.we-are-here-content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0;
}

.help-card {
    background: transparent;
    border-radius: 0;
    padding: 0 30px;
    text-align: center;
    border: 0;
}

.help-card:nth-child(1),
.help-card:nth-child(2) {
    border-right: 1px solid #b7cdea;
}

.help-icon {
    margin-bottom: 16px;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 1.5px solid rgba(33, 123, 255, 0.21);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
}

.help-icon img {
    width: 24px;
    height: 24px;
    object-fit: contain;
}

.help-title {
    font-size: 30px;
    line-height: 36px;
    font-weight: 500;
    color: #000;
    margin-bottom: 10px;
}

.help-desc {
    font-size: 17px;
    line-height: 27px;
    color: #3d3d3d;
    margin-bottom: 16px;
}

.help-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    width: 200px;
}

.primary-button {
    background: #0263d4;
    color: #fff;
    border: 1px solid #0263d4;
}

.primary-button:hover {
    background: #0263d4;
    color: #fff;
    border-color: #0263d4;
}

.secondary-button {
    background: #fff;
    color: #0263d4;
    border: 1px solid #0263d4;
}

.secondary-button:hover {
    background: #0263d4;
    color: #fff;
}

/* Responsive: We Are Here To Help You */
@media (max-width: 768px) {
    .we-are-here-section { padding: 36px 0; }
    .we-are-here-main-title { font-size: 36px; line-height: 48px; }
    .we-are-here-content { grid-template-columns: 1fr; gap: 16px; }
    .help-card { padding: 0 10px 18px; }
    .help-card:nth-child(1), .help-card:nth-child(2) { border-right: 0; border-bottom: 1px solid #b7cdea; }
    .help-icon { width: 42px; height: 42px; margin-bottom: 12px; }
    .help-icon img { width: 20px; height: 20px; }
    .help-title { font-size: 30px; line-height: 45px; margin-bottom: 8px; }
    .help-desc { font-size: 15px; line-height: 24px; margin-bottom: 12px; }
    .help-button { width: 100%; max-width: 220px; padding: 10px 20px; }
}

@media (max-width: 576px) {
    .we-are-here-section { padding: 30px 0; }
    .we-are-here-main-title { font-size: 32px; line-height: 42px; }
    .help-icon { width: 38px; height: 38px; }
    .help-icon img { width: 18px; height: 18px; }
    .help-title { font-size: 30px; line-height: 45px; }
    .help-desc { font-size: 14px; line-height: 22px; }
}

/* Testimonial Section Styles */
.testimonial-section {
    background: #f7f7f7;
    padding: 50px 0;
}

.testimonial-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.testimonial-heading {
    margin-bottom: 30px;
}

.testimonial-title {
    font-size: 50px;
    line-height: 85px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    color: #000;
}

.testimonial-title .a-and-b { color: #0263d4; }

.testimonial-rating {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 28px;
    text-align: center;
}

.rating-score {
    font-size: 18px;
    line-height: 140%;
    font-weight: 500;
    color: #000;
    display: inline-block;
}

.rating-stars {
    display: inline-flex;
    align-items: center;
    gap: 2px;
}

.rating-stars img {
    width: 17px;
    height: 18px;
}

.rating-text {
    font-size: 17px;
    line-height: 140%;
    color: #000;
    display: block;
    margin-top: 14px;
}

.inline-stars {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin: 0 6px;
}

.testimonials-carousel {
    position: relative;
    overflow: hidden;
    width: 100%;
    margin-bottom: 20px;
}

.testimonials-track {
    display: flex;
    transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 200%; /* 2 slides * 100% */
}

.testimonials-slide {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    width: 50%; /* Each slide takes 50% of track (100% / 2 slides) */
    flex-shrink: 0;
}

.testimonial-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    padding: 24px;
    text-align: left;
    opacity: 1;
    display: block;
}

.testimonial-card.hidden {
    opacity: 0;
    transform: translateX(20px);
}

.testimonial-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    margin-top: 40px;
}

.pagination-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #e0e0e0;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.pagination-dot:hover {
    background-color: #b3d9ff;
    transform: scale(1.1);
}

.pagination-dot.active {
    background-color: #0263d4;
    transform: scale(1.2);
    border-color: #0263d4;
}

/* Responsive: Testimonial Section */
@media (max-width: 992px) {
    .testimonial-section { padding: 60px 0; }
    .testimonial-title { font-size: 40px; line-height: 64px; }
}

@media (max-width: 768px) {
    .testimonial-section { padding: 40px 0; }
    .testimonial-title { font-size: 34px; line-height: 50px; }
    .testimonial-heading { margin-bottom: 20px; }
    .testimonial-rating { gap: 12px; margin-bottom: 30px; flex-direction: row !important; align-items: center; }
    .testimonials-slide { grid-template-columns: 1fr; gap: 18px; }
    .testimonial-card { padding: 18px; }
    .testimonial-pagination { gap: 10px; margin-top: 24px; }
    .pagination-dot { width: 10px; height: 10px; }
}

@media (max-width: 576px) {
    .testimonial-section { padding: 32px 0; }
    .testimonial-title { font-size: 30px; line-height: 44px; }
    .rating-score, .rating-text { font-size: 16px; }
    /* Hide 4.8 rating and stars on mobile */
    .testimonial-rating { display: none; }
    .rating-stars { display: inline-flex; align-items: center; }
    .rating-stars img { width: 16px; height: 16px; }
    .testimonials-slide { gap: 14px; }
    /* Show only one card per slide on small screens */
    .testimonials-slide { grid-template-columns: 1fr; }
    .testimonials-slide .testimonial-card:nth-child(2) { display: none; }
    .testimonial-card { padding: 16px; }
}

.testimonial-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 32px;
}

.quote-icon {
    width: 50px;
    height: 36px;
    opacity: 1;
    filter: hue-rotate(200deg) saturate(2) brightness(0.8);
    /* Alternative approach - use this if the above doesn't work well */
    /* filter: invert(27%) sepia(51%) saturate(2878%) hue-rotate(200deg) brightness(104%) contrast(97%); */
}

.testimonial-stars {
    display: flex;
    gap: 2px;
}

.testimonial-stars img {
    width: 22px;
    height: 22px;
    object-fit: contain;
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}

.testimonial-content {
    font-size: 18px;
    line-height: 190%;
    color: #0f1125;
    margin-bottom: 24px;
}

.testimonial-divider {
    height: 1px;
    background: #e9eff5;
    margin-bottom: 24px;
}

.testimonial-profile {
    display: flex;
    align-items: center;
    gap: 16px;
}

.profile-avatar {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-name {
    font-weight: 500;
    color: #0f1125;
    margin-bottom: 8px;
}

.profile-role {
    font-size: 17px;
    color: #717276;
}

/* Responsive styles for new sections */
@media (max-width: 768px) {
    .before-after-images {
        flex-direction: column;
    }
    
    .service-areas-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .what-make-us-trusted-container {
        flex-direction: column;
    }
    
    .trusted-features {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .we-are-here-content {
        grid-template-columns: 1fr;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .testimonial-rating {
        flex-direction: column;
        gap: 10px;
    }
    
    .recent-projects-title,
    .why-choose-title,
    .service-areas-main-title,
    .trusted-title,
    .we-are-here-main-title,
    .testimonial-title {
        font-size: 36px;
        line-height: 42px;
    }
}
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <b class="top-rated-area-rug-container">
            <span class="rated-area-rug-top-rated-area-rug-container">
                <p class="top-rated-area-rug">Expert Area Rug Repair in Brooklyn & Across the USA</p>
            </span>
        </b>
        
        <div class="hero-subheading">
          Professional rug repair and restoration services that preserve your valuable rugs with precision, care, and masterful craftsmanship.
        </div>
        
        <a href="tel:{{ Config::get('page.phone_use') }}" class="hero-button">
            <div class="hero-button-text">Call Now</div>
        </a>
    </div>
</div>

<!-- Cleaning Process Section -->
<section class="cleaning-process-section">
    <div class="cleaning-process-container">
        <div class="our-step-by-step-area-container">
            <span class="our-step-by-step-area-our-step-by-step-area-container">
                <span>Our Step-by-Step </span>
                <span class="area-rug">Area Rug</span>
                <span> Repair Process</span>
            </span>
        </div>

        <div class="cleaning-cards">
            <!-- Card 1 -->
            <div class="cleaning-card">
                <div class="cleaning-icon-circle">
                    <img src="/images/services%20images/icons/Inspection%20%20Dust%20Removal.png" alt="Inspection Icon">
                </div>
                <div class="inspection-dust">Inspection & Damage Assessment</div>
                <div class="thorough-rug-checkup">Thorough evaluation of damage and material to plan the perfect restoration.</div>
            </div>

            <!-- Card 2 -->
            <div class="cleaning-card">
                <div class="cleaning-icon-circle">
                    <img src="/images/services images/icons/Rug Repair/sewing.png" alt="Cleaning Icon">
                </div>
                <div class="cleaning-title">Expert Repair & Reweaving</div>
                <div class="cleaning-desc">Masterful reweaving, patching, and fringe repair for seamless results.</div>
            </div>

            <!-- Card 3 -->
            <div class="cleaning-card">
                <div class="cleaning-icon-circle">
                    <img src="/images/services images/icons/Rug Repair/edge repair.png" alt="Stain & Odor Icon">
                </div>
                <div class="stain-odor-title">Color Matching & Blending</div>
                <div class="stain-odor-desc">Precise dye matching and blending to ensure repairs are invisible.</div>
            </div>

            <!-- Card 4 -->
            <div class="cleaning-card">
                <div class="cleaning-icon-circle">
                    <img src="/images/services images/icons/Drying Grooming.png" alt="Drying Icon">
                </div>
                <div class="drying-grooming-title">Final Quality Assurance</div>
                <div class="drying-grooming-desc">Detailed inspection and cleaning to ensure your rug looks revitalized.</div>
            </div>
        </div>
    </div>
</section>

<!-- Why Professional Area Rug Cleaning is Important Section -->
<section class="why-professional-section">
    <div class="why-professional-container">
        <!-- Left side - Image -->
        <div class="why-professional-left">
            <div class="why-professional-image-container">
                                 <img class="why-professional-image" alt="Professional rug cleaning" src="/images/services images/why professional section/Why Professional Area Rug Repair is Important.webp">
            </div>
        </div>
        
        <!-- Right side - Content -->
        <div class="why-professional-right">
            <div class="why-professional-content">
                <div class="why-professional-heading">
                    <span class="why-professional-heading-text">
                        <span>Why </span>
                        <span class="professional">Professional</span>
                        <span> Area Rug Repair is Important?</span>
                    </span>
                </div>
                
                <div class="why-professional-description">
                    <p>Ignoring damage like fraying edges or tears allows them to worsen, drastically reducing the rug’s value and leading to irreversible harm. Choosing A & B Carpet Cleaning ensures:
</p>
                </div>
                
                <div class="why-professional-features">
                                         <div class="feature-item">
                         <div class="feature-circle">
                             <img class="feature-icon" alt="Deep cleaning" src="/images/services images/why professional section/Deep Cleaning.svg">
                         </div>
                         <div class="feature-text">Expert restoration of tears, holes, and fraying</div>
                     </div>
                     
                     <div class="feature-item">
                         <div class="feature-circle">
                             <img class="feature-icon" alt="Remove stains and odors" src="/images/services images/why professional section/Remove Stains and Odors.svg">
                         </div>
                         <div class="feature-text">Professional reweaving and patching techniques</div>
                     </div>
                     
                     <div class="feature-item">
                         <div class="feature-circle">
                             <img class="feature-icon" alt="Eco-friendly products" src="/images/services images/why professional section/Eco Friendly Products.svg">
                         </div>
                         <div class="feature-text">Prevention of further, more costly damage</div>
                     </div>
                     
                     <div class="feature-item">
                         <div class="feature-circle">
                             <img class="feature-icon" alt="Protecting delicate fibers" src="/images/services images/why professional section/Protecting Delicate Fibers.svg">
                         </div>
                         <div class="feature-text">Preservation of your rug’s structural integrity and value</div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Before & After Section -->
<section class="before-after-section">
    <div class="before-after-container">
        <div class="before-after-heading">
            <span class="before-after-title">Before & After</span>
        </div>
        
                 <div class="recent-projects-heading">
             <div class="recent-projects-title">
                 <span class="recent-projects-by-recent-projects-by-container">
                     <span>Recent </span>
                     <span class="projects">Projects</span>
                     <span> By A&B Carpet</span>
                 </span>
             </div>
         </div>
        
        <div class="before-after-content">
            <div class="before-after-images">
                                 <div class="before-image">
                     <img src="/images/services images/before after/rug repair/before.JPG" alt="Before cleaning">
                     <div class="image-label before-label">Before</div>
                 </div>
                 <div class="after-image">
                     <img src="/images/services images/before after/rug repair/after.JPG" alt="After cleaning">
                     <div class="image-label after-label">After</div>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose A and B Carpet Section -->
<section class="why-choose-section">
    <div class="why-choose-container">
        <div class="why-choose-left">
            <div class="why-choose-content">
                <div class="why-choose-heading">
                    <span class="why-choose-title">
                        <span>Why Choose </span>
                        <span class="a-and-b">A and B</span>
                        <span> Carpet Cleaning for Rug Repair?</span>
                    </span>
                </div>
                <div class="why-choose-description">
                  We’re recognized as the best area rug repair service in Brooklyn and throughout the USA because we provide:
                </div>
            </div>
        </div>
        <div class="why-choose-right">
            <div class="why-choose-features">
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Over 30 Years of Experience</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Precision Craftsmanship</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Affordable & Transparent Pricing</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Satisfaction Guaranteed</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Professional & Reliable</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas Section -->
<section class="service-areas-section">
    <div class="service-areas-container">
        <div class="service-areas-heading">
            <span class="service-areas-title">Service Areas</span>
        </div>
        
        <div class="service-areas-main-heading">
            <span class="service-areas-main-title">
                <span>Serving All </span>
                <span class="a-and-b">Brooklyn</span>
                <span> Neighborhoods</span>
            </span>
        </div>
        
        <div class="service-areas-grid">
            <div class="area-item">
                <a href="/barren-island" class="area-link">Barren Island</a>
            </div>
            <div class="area-item">
                <div class="area-name">Canarsie</div>
            </div>
            <div class="area-item">
                <div class="area-name">Bath Beach</div>
            </div>
            <div class="area-item">
                <div class="area-name">Carroll Gardens</div>
            </div>
            <div class="area-item">
                <div class="area-name">Bay Ridge</div>
            </div>
            <div class="area-item">
                <div class="area-name">Caton Park</div>
            </div>
            <div class="area-item">
                <div class="area-name">Bergen Beach</div>
            </div>
            <div class="area-item">
                <div class="area-name">Cobble Hill</div>
            </div>
            <div class="area-item">
                <div class="area-name">Bushwick</div>
            </div>
            <div class="area-item">
                <div class="area-name">Coney Island</div>
            </div>
        </div>
        
        <div class="view-all-locations">
            <div class="view-all-text">View All 75 Other Locations</div>
            <a class="view-all-arrow" href="/service-area" target="_blank" rel="noopener">
                <img src="/images/services images/icons/Arrow.svg" alt="View all">
            </a>
        </div>
    </div>
</section>

<!-- What Make Us Trusted Section -->
<section class="what-make-us-trusted-section">
    <div class="what-make-us-trusted-container">
        <div class="what-make-us-trusted-left">
            <div class="trusted-image">
                <img src="/images/services images/What Make Us Trusted.webp" alt="Trusted cleaning service">
            </div>
        </div>
        
        <div class="what-make-us-trusted-right">
            <div class="trusted-heading">
                <span class="trusted-title">
                    <span>What Make Us </span>
                    <span class="a-and-b">Trusted</span>
                </span>
            </div>
            
            <div class="trusted-features">
                <div class="trusted-feature-card">
                    <div class="trusted-feature-icon">
                        <img src="/images/services images/What Make Us Trusted/Years of Experience.svg" alt="Years of Experience">
                    </div>
                    <div class="trusted-feature-content">
                        <div class="trusted-feature-title">Masterful Rug Craftsmanship</div>
                        <div class="trusted-feature-desc"> Our artisans take pride in perfect rewearing, flawless patching, and meticulous attention to detail.</div>
                    </div>
                </div>
                
                <div class="trusted-feature-card">
                    <div class="trusted-feature-icon">
                        <img src="/images/services images/What Make Us Trusted/Safe Cleaning Products.svg" alt="Safe Cleaning Products">
                    </div>
                    <div class="trusted-feature-content">
                        <div class="trusted-feature-title">Locally Trusted Brooklyn Experts</div>
                        <div class="trusted-feature-desc">Brooklyn’s trusted rug repair specialists bring restoration service to homes throughout the borough.</div>
                    </div>
                </div>
                
                <div class="trusted-feature-card">
                    <div class="trusted-feature-icon">
                        <img src="/images/services images/What Make Us Trusted/Ontime and Reliable.svg" alt="On-Time and Reliable">
                    </div>
                    <div class="trusted-feature-content">
                        <div class="trusted-feature-title">Our Satisfaction Guarantee</div>
                        <div class="trusted-feature-desc">We guarantee seamless repairs and address concerns. Your complete satisfaction is our priority.</div>
                    </div>
                </div>
                
                <div class="trusted-feature-card">
                    <div class="trusted-feature-icon">
                        <img src="/images/services images/What Make Us Trusted/We Stand behind our Work.svg" alt="We Stand Behind Our Work">
                    </div>
                    <div class="trusted-feature-content">
                        <div class="trusted-feature-title">We Stand Behind Our Work</div>
                        <div class="trusted-feature-desc">Our craftsmanship ensures your rug’ longevity and beauty. Committed to excellence in every repair.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- We Are Here To Help You Section -->
<section class="we-are-here-section">
    <div class="we-are-here-container">
        <div class="we-are-here-heading">
            <span class="we-are-here-title">We Are Here To Help You</span>
        </div>
        
        <div class="we-are-here-main-heading">
            <span class="we-are-here-main-title">
                <span>100 percent </span>
                <span class="a-and-b">Satisfaction</span>
                <span> Guaranteed</span>
            </span>
        </div>
        
        <div class="we-are-here-content">
            <div class="help-card">
                <div class="help-icon">
                    <img src="/images/services images/we are here to help you/special offer.svg" alt="Special offer">
                </div>
                <div class="help-title">Special Offer</div>
                <div class="help-desc">Receive 20% off your first rug repair service. Preserve your investment today.</div>
                <a href="/contact" class="help-button primary-button">Get Quote</a>
            </div>
            
            <div class="help-card">
                <div class="help-icon">
                    <img src="/images/services images/we are here to help you/need quick service.svg" alt="Quick service">
                </div>
                <div class="help-title">Need Quick Service?</div>
                <div class="help-desc">Book your consultation for same-week evaluation and repair availability.</div>
                <a href="/contact" class="help-button secondary-button">Chat With Us</a>
            </div>
            
            <div class="help-card">
                <div class="help-icon">
                    <img src="/images/services images/we are here to help you/why wait.svg" alt="Why wait">
                </div>
                <div class="help-title">Why Wait?</div>
                <div class="help-desc">Brooklyn’s trusted rug repair experts (licensed, bonded, and insured).</div>
                <a href="tel:{{ Config::get('page.phone_use') }}" class="help-button primary-button">Call Now</a>
            </div>
        </div>
    </div>
</section>

<!-- The Most Reliable Carpet Cleaners Testimonial Section -->
<section class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-heading">
            <span class="testimonial-title">
                <span>Brooklyn's Most </span>
                <span class="a-and-b">Reliable Rug</span>
                <span> Repair Experts</span>
            </span>
        </div>
        
        <div class="testimonial-content">
            <div class="rating-text" style="display:block; width:100%; text-align:center; margin-top:12px;">
                500+ happy customers with
                <span class="inline-stars">
                    <img src="/images/services images/Star.png" alt="Star" class="star-icon">
                    <img src="/images/services images/Star.png" alt="Star" class="star-icon">
                    <img src="/images/services images/Star.png" alt="Star" class="star-icon">
                    <img src="/images/services images/Star.png" alt="Star" class="star-icon">
                    <img src="/images/services images/half star.png" alt="Half Star" class="star-icon">
                </span>
            </div>
        </div>
        
        <div class="testimonials-carousel">
            <div class="testimonials-track">
                <!-- Slide 1: First 2 testimonials -->
                <div class="testimonials-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="/images/services images/quote.png" alt="Quote" class="quote-icon">
                            <div class="testimonial-stars">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                            </div>
                        </div>
                        
                        <div class="testimonial-content">
                            A & B Carpet offers the best carpet cleaning in Brooklyn! They removed tough pet stains I thought were impossible. Professional, reliable, and my go-to cleaning service!
                        </div>
                        
                        <div class="testimonial-divider"></div>
                        
                        <div class="testimonial-profile">
                            <img src="/images/services images/testimonial/Kenny-Park Slope.png" alt="Kenny-Park Slope" class="profile-avatar">
                            <div class="profile-info">
                                <div class="profile-name">Kenny-Park Slope</div>
                                <div class="profile-role">Customer</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="/images/services images/quote.png" alt="Quote" class="quote-icon">
                            <div class="testimonial-stars">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                            </div>
                        </div>
                        
                        <div class="testimonial-content">
                            I’ve tried other carpet cleaners in Brooklyn but none compare to A and B Carpet. They are professional, affordable, and always arrive on time.
                        </div>
                        
                        <div class="testimonial-divider"></div>
                        
                        <div class="testimonial-profile">
                            <img src="/images/services images/testimonial/Bay Ridge, Michael R.png" alt="Bay Ridge, Michael R" class="profile-avatar">
                            <div class="profile-info">
                                <div class="profile-name">Bay Ridge, Michael R</div>
                                <div class="profile-role">Customer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Last 2 testimonials -->
                <div class="testimonials-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="/images/services images/quote.png" alt="Quote" class="quote-icon">
                            <div class="testimonial-stars">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                            </div>
                        </div>
                        
                        <div class="testimonial-content">
                            Outstanding service! A&B Carpet Cleaning transformed my old, stained rugs into beautiful pieces. Their attention to detail and professional approach exceeded my expectations.
                        </div>
                        
                        <div class="testimonial-divider"></div>
                        
                        <div class="testimonial-profile">
                            <img src="/images/services images/testimonial/williamsburg, Sarah L.png" alt="Williamsburg, Sarah L" class="profile-avatar">
                            <div class="profile-info">
                                <div class="profile-name">Williamsburg, Sarah L</div>
                                <div class="profile-role">Customer</div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="/images/services images/quote.png" alt="Quote" class="quote-icon">
                            <div class="testimonial-stars">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                                <img src="/images/services images/Star.png" alt="Star">
                            </div>
                        </div>
                        
                        <div class="testimonial-content">
                            Fast, reliable, and excellent results! A&B cleaned my expensive Persian rug with care and restored it to its original beauty. Highly recommend their services.
                        </div>
                        
                        <div class="testimonial-divider"></div>
                        
                        <div class="testimonial-profile">
                            <img src="/images/services images/testimonial/DUMBO, Robert K.png" alt="DUMBO, Robert K" class="profile-avatar">
                            <div class="profile-info">
                                <div class="profile-name">DUMBO, Robert K</div>
                                <div class="profile-role">Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-pagination">
            <div class="pagination-dot active" data-slide="0"></div>
            <div class="pagination-dot" data-slide="1"></div>
            <div class="pagination-dot" data-slide="2"></div>
            <div class="pagination-dot" data-slide="3"></div>
        </div>

<script src="/js/testimonial-carousel.js"></script>
    </div>
</section>
@include('inc.footer')
abcc
