<?php use Illuminate\Support\Str; ?>
@include('inc.header',[
            'title' => 'Our Services - A&B Carpet Cleaning',
            'description' => 'Explore our full range of professional cleaning and installation services in New York.',
            'active_page' => 'services',
    ])

<!-- Pure CSS Toggle Solution - No JavaScript needed! -->



<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;500;700&display=swap');

/* All Services Section Styles */
.rectangle-div {
    width: 100%;
    position: relative;
    background: linear-gradient(180deg, rgba(165, 199, 240, 0.39) 99.99%);
    height: auto;
    min-height: 1400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 60px 20px;
    clear: both;
    opacity: 1;
    visibility: visible;
    z-index: 1000;
}

.our-247-services-container {
    width: 326px;
    position: relative;
    font-size: 36px;
    line-height: 60px;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    text-align: center;
    display: flex;
    align-items: center;
    height: 60px;
    color: #000;
    margin-bottom: 10px;
}

.our-247-services-our-247-services-container {
    width: 100%;
}

.span {
    color: #0263d4;
}

.turning-cores-into {
    width: 394px;
    position: relative;
    font-size: 20px;
    line-height: 35px;
    font-weight: 500;
    font-family: 'Open Sans';
    color: #6d6d6d;
    text-align: center;
    display: inline-block;
    margin-bottom: 30px;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    width: 100%;
    margin-top: 20px;
    position: relative;
    z-index: 1001;
}

/* Service Card */
.service-card {
    width: 100%;
    position: relative;
    border-radius: 16px;
    background-color: #fff;
    height: 380px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    z-index: 1002;
}

/* Ensure links and controls remain clickable even if any decorative layer overlaps */
.services-grid *, .service-card * { pointer-events: auto; }

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Service Card Image Link */
.service-card-image-link {
    display: block;
    text-decoration: none;
    color: inherit;
}

.service-card-image-link:hover {
    text-decoration: none;
    color: inherit;
}

/* Service Card Image */
.service-card-image {
    width: 100%;
    position: relative;
    border-radius: 13px;
    height: 201px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    margin: 12px 25px;
    width: calc(100% - 50px);
    cursor: pointer;
    transition: transform 0.3s ease;
}

.service-card-image-link:hover .service-card-image {
    transform: scale(1.05);
}

/* Service Card Content */
.service-card-content {
    padding: 8px 25px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.service-card-heading {
    width: 100%;
    position: relative;
    font-size: 20px;
    line-height: 35px;
    font-weight: 500;
    font-family: 'Open Sans';
    color: #000;
    text-align: left;
    display: flex;
    align-items: center;
    height: 27px;
    margin-bottom: 8px;
    margin-top: -4px;
}

.service-card-description {
    font-size: 14px;
    line-height: 22px;
    color: #6d6d6d;
    margin-bottom: 4px;
    flex: 1;
}

.service-card-link {
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    color: #0263d4;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Open Sans';
    transition: color 0.3s ease;
}

.service-card-link:hover {
    color: #0252b3;
}

.learn-more-arrow {
    width: auto;
    height: auto;
    border: none;
    border-radius: 0;
    display: inline;
    align-items: center;
    justify-content: center;
    position: relative;
}

 .learn-more-arrow::after {
     content: '→';
     font-size: 14px;
     color: #0263d4;
     font-weight: bold;
 }
 
 /* View All Services Section */
 .view-all-services-container {
     display: flex;
     align-items: center;
     justify-content: center;
     gap: 15px;
     margin-top: 40px;
     cursor: pointer;
     transition: transform 0.3s ease;
 }
 
 .view-all-services-container:hover {
     transform: translateY(-2px);
 }
 
 .view-all-services {
     width: 141px;
     position: relative;
     font-size: 18px;
     font-weight: 500;
     font-family: 'Open Sans';
     color: #000;
     text-align: left;
     display: inline-block;
 }
 
 .view-all-services-arrow {
     display: flex;
     align-items: center;
     justify-content: center;
 }
 
 .ellipse-div {
     width: 30px;
     height: 30px;
     position: relative;
     border-radius: 50%;
     background-color: #fff;
     display: flex;
     align-items: center;
     justify-content: center;
     box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
 }
 
 .arrow-icon {
     width: 16px;
     height: 16px;
     position: relative;
     max-width: 100%;
     overflow: hidden;
     max-height: 100%;
     object-fit: contain;
 }



/* Mobile Responsive for All Services Section */
@media (max-width: 768px) {
    body {
        overflow-x: hidden !important;
    }
    
    .rectangle-div.services-rectangle {
        width: 100vw !important;
        height: auto !important;
        min-height: auto !important;
        padding: 40px 15px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: flex-start !important;
        visibility: visible !important;
        opacity: 1 !important;
        overflow: visible !important;
        position: relative !important;
        z-index: 10 !important;
        background: linear-gradient(180deg, rgba(165, 199, 240, 0.39) 99.99%) !important;
    }
    
    .our-247-services-container {
        width: 280px !important;
        font-size: 32px !important;
        line-height: 48px !important;
        height: auto !important;
        text-align: center !important;
        display: flex !important;
        visibility: visible !important;
        margin-bottom: 10px !important;
        color: #000 !important;
    }
    
    .turning-cores-into {
        width: 320px !important;
        font-size: 16px !important;
        line-height: 28px !important;
        display: inline-block !important;
        visibility: visible !important;
        text-align: center !important;
        margin-bottom: 30px !important;
        color: #6d6d6d !important;
    }
   
    .services-grid {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 20px !important;
        margin-top: 30px !important;
        visibility: visible !important;
        opacity: 1 !important;
        width: 100% !important;
        max-width: 95% !important;
        position: relative !important;
        z-index: 11 !important;
    }
   
    .service-card {
        height: 360px !important;
        display: flex !important;
        flex-direction: column !important;
        visibility: visible !important;
        opacity: 1 !important;
        background-color: #fff !important;
        border-radius: 16px !important;
        overflow: hidden !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        position: relative !important;
        z-index: 12 !important;
    }
   
    .service-card-image {
        height: 200px !important;
        margin: 12px 20px !important;
        width: calc(100% - 40px) !important;
        border-radius: 10px !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }
    
    .service-card-content {
        padding: 5px 15px 10px !important;
        flex: 1 !important;
        display: flex !important;
        flex-direction: column !important;
    }
   
    .service-card-heading {
        font-size: 16px !important;
        line-height: 24px !important;
        height: auto !important;
        margin-bottom: 6px !important;
        color: #000 !important;
        font-weight: 500 !important;
    }
   
    .service-card-description {
        font-size: 12px !important;
        line-height: 18px !important;
        margin-bottom: 6px !important;
        color: #6d6d6d !important;
        flex: 1 !important;
    }
    
    .service-card-link {
        font-size: 12px !important;
        color: #0263d4 !important;
        text-decoration: none !important;
        font-weight: 500 !important;
    }
    
    .view-all-services-container {
        display: flex !important;
        visibility: visible !important;
        margin-top: 30px !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 15px !important;
        cursor: pointer !important;
    }
    
    .additional-service-card {
        display: none !important;
    }
    
    .services-grid.show-additional .additional-service-card {
        display: flex !important;
    }
}

@media (max-width: 480px) {
    .rectangle-div.services-rectangle {
        width: 100vw !important;
        min-height: auto !important;
        height: auto !important;
        padding: 30px 10px !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        visibility: visible !important;
        opacity: 1 !important;
        overflow: visible !important;
        position: relative !important;
        z-index: 10 !important;
    }
    
    .our-247-services-container {
        width: 240px !important;
        font-size: 28px !important;
        line-height: 42px !important;
        display: flex !important;
        visibility: visible !important;
        text-align: center !important;
        margin-bottom: 10px !important;
        color: #000 !important;
    }
    
    .turning-cores-into {
        width: 280px !important;
        font-size: 14px !important;
        line-height: 24px !important;
        display: inline-block !important;
        visibility: visible !important;
        text-align: center !important;
        margin-bottom: 25px !important;
        color: #6d6d6d !important;
    }
   
    .services-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 15px !important;
        margin-top: 25px !important;
        visibility: visible !important;
        opacity: 1 !important;
        width: 100% !important;
        max-width: 95% !important;
        position: relative !important;
        z-index: 11 !important;
    }
   
    .service-card {
        height: 310px !important;
        display: flex !important;
        flex-direction: column !important;
        visibility: visible !important;
        opacity: 1 !important;
        background-color: #fff !important;
        border-radius: 16px !important;
        overflow: hidden !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        position: relative !important;
        z-index: 12 !important;
    }
   
    .service-card-image {
        height: 180px !important;
        margin: 10px 20px !important;
        width: calc(100% - 40px) !important;
        border-radius: 10px !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }
    
    .service-card-content {
        padding: 5px 15px 10px !important;
        flex: 1 !important;
        display: flex !important;
        flex-direction: column !important;
    }
   
    .service-card-heading {
        font-size: 14px !important;
        line-height: 20px !important;
        margin-bottom: 4px !important;
        color: #000 !important;
        font-weight: 500 !important;
    }
   
    .service-card-description {
        font-size: 11px !important;
        line-height: 16px !important;
        margin-bottom: 4px !important;
        color: #6d6d6d !important;
        flex: 1 !important;
    }
    
    .service-card-link {
        font-size: 11px !important;
        color: #0263d4 !important;
        text-decoration: none !important;
        font-weight: 500 !important;
    }
    
    .view-all-services-container {
        margin-top: 25px !important;
        gap: 12px !important;
        display: flex !important;
        visibility: visible !important;
        align-items: center !important;
        justify-content: center !important;
        cursor: pointer !important;
    }
    
    .view-all-services {
        font-size: 14px !important;
    }
    
    .ellipse-div {
        width: 28px !important;
        height: 28px !important;
    }
    
    .arrow-icon {
        width: 14px !important;
        height: 14px !important;
    }
    
    .additional-service-card {
        display: none !important;
    }
    
    .services-grid.show-additional .additional-service-card {
        display: flex !important;
    }
}

/* Hero Section Styles (copied from rug-repair) */
.hero-section {
    width: 100%;
    position: relative;
    background-image: url('/images/services images/hero section/rug cleaning hero section image.png');
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

/* Building Trust, Delivering Excellence Section */
.trust-excellence-section {
    width: 100%;
    position: relative;
    background-color: #fff;
    height: 706px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
}

.trust-excellence-container {
    display: flex;
    align-items: center;
    max-width: 1200px;
    width: 100%;
    gap: 60px;
}

.trust-excellence-left {
    flex: 1;
    display: flex;
    justify-content: center;
}

.trust-excellence-image {
    width: 100%;
    position: relative;
    border-radius: 15px;
    max-width: 100%;
    overflow: hidden;
    height: 585px;
    object-fit: cover;
}

.trust-excellence-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 705px;
}

.building-trust-delivering-container {
    width: 450px;
    position: relative;
    font-size: 40px !important;
    line-height: 44px !important;
    font-weight: 600;
    font-family: 'Open Sans Condensed';
    text-align: left;
    display: flex;
    align-items: center;
    height: 145px;
    color: #000;
}

.building-trust-delivering-building-trust-delivering-container {
    width: 100%;
}

.building-trust-delivering-exc {
    margin: 0;
    font-size: 40px !important;
    line-height: 44px !important;
    font-weight: 600 !important;
    font-family: 'Open Sans Condensed' !important;
}

.building {
    color: #000;
}

.trust {
    color: #0263d4;
}

.at-a-and-container {
    width: 593px;
    position: relative;
    font-size: 20px;
    line-height: 35px;
    font-weight: 500;
    font-family: 'Open Sans';
    color: #6d6d6d;
    text-align: justify;
    display: inline-block;
    height: 455px;
}

.at-a-and {
    margin: 0;
}

/* Mobile Responsive for Trust Excellence Section */
@media (max-width: 768px) {
    .trust-excellence-section {
        height: auto;
        padding: 60px 15px;
    }
    
    .trust-excellence-container {
        flex-direction: column;
        gap: 40px;
    }
    
    .trust-excellence-left {
        width: 100%;
    }
    
         .trust-excellence-image {
         height: 350px;
         width: 100%;
         object-fit: cover;
     }
    
    .trust-excellence-right {
        width: 100%;
        height: auto;
    }
    
         .building-trust-delivering-container {
         width: 100%;
         font-size: 18px !important;
         line-height: 24px !important;
         height: auto;
         text-align: center;
         margin-bottom: 20px;
     }
     
     .building-trust-delivering-exc br {
         display: none;
     }
    
         .at-a-and-container {
         width: 100%;
         font-size: 16px;
         line-height: 26px;
         height: auto;
         text-align: justify;
         padding: 0 15px;
     }
}

@media (max-width: 480px) {
         .trust-excellence-section {
         padding: 40px 10px;
     }
     
     .trust-excellence-image {
         height: 250px;
         width: 100%;
         object-fit: cover;
     }
    
         .building-trust-delivering-container {
         font-size: 16px !important;
         line-height: 22px !important;
         margin-bottom: 15px;
     }
     
     .building-trust-delivering-exc br {
         display: none;
     }
    
         .at-a-and-container {
         font-size: 14px;
         line-height: 22px;
         text-align: justify;
         padding: 0 10px;
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
 </style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <b class="top-rated-area-rug-container">
            <span class="rated-area-rug-top-rated-area-rug-container">
                <p class="top-rated-area-rug">Brooklyn's Reliable Home</p>
                <p class="top-rated-area-rug">Cleaning Services</p>
            </span>
        </b>
        
        <div class="hero-subheading">
        Cleaning Service in Brooklyn for Homes and Apartments
        </div>
        
        <a href="tel:{{ Config::get('page.phone_use') }}" class="hero-button">
            <div class="hero-button-text">Call Now</div>
        </a>
    </div>
<!-- end hero section -->
</div>

<!-- All Services Section -->
<div class="rectangle-div services-rectangle" data-section="services">
    <div class="our-247-services-container">
        <span class="our-247-services-our-247-services-container">
            <span>Our </span>
            <span class="span">24/7</span>
            <span> Services</span>
        </span>
    </div>
    
    <div class="turning-cores-into">Turning cores into cheers since day one</div>

    <!-- Hidden checkbox for CSS toggle -->
    <input type="checkbox" id="toggle-services-checkbox" style="display: none;">

    <div class="services-grid" id="servicesGrid">
        <!-- Row 1 -->
                                 <div class="service-card">
                    <a href="/services/rug-cleaning" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Area Rug Cleaning.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Area Rug Cleaning</h3>
                        <p class="service-card-description">Professional area rug cleaning in Brooklyn uses safe and effective techniques to protect delicate fibers and restore beauty.</p>
                        <a href="/services/rug-cleaning" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                        <div class="service-card">
                    <a href="/services/rug-repair" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Area Rug Repair.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Area Rug Repair</h3>
                        <p class="service-card-description">Expert area rug repair in Brooklyn for damaged rugs, fixing tears, edges, and fringes to bring new life to your rugs.</p>
                        <a href="/services/rug-repair" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                        <div class="service-card">
                    <a href="/services/rug-restoration" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/area rug restoration tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Area Rug Restoration</h3>
                        <p class="service-card-description">Restore the beauty of your rugs with expert area rug restoration services in Brooklyn, including color restoration and preservation.</p>
                        <a href="/services/rug-restoration" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
        <!-- Row 2 -->
                        <div class="service-card">
                    <a href="/services/carpet-cleaning" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Carpet Cleaning Tile Image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Carpet Cleaning</h3>
                        <p class="service-card-description">Get the best carpet cleaning in Brooklyn with deep steam cleaning, stain removal, and eco-friendly solutions for all carpet types.</p>
                        <a href="/services/carpet-cleaning" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                        <div class="service-card">
                    <a href="/services/carpet-installation" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Carpet Installation tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Carpet Installation</h3>
                        <p class="service-card-description">Professional carpet installation in Brooklyn with expert fitting and durable materials to enhance your space with quality craftsmanship.</p>
                        <a href="/services/carpet-installation" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                        <div class="service-card">
                    <a href="/services/water-and-fire-damage-repair" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/water and fire Damage tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Water & Fire Damage Repair</h3>
                        <p class="service-card-description">Comprehensive water and fire damage repair in Brooklyn, restoring carpets, rugs, and interiors to their pre-damage condition.</p>
                        <a href="/services/water-and-fire-damage-repair" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
        <!-- Row 3 -->
                        <div class="service-card">
                    <a href="/services/pet-stain-and-odor-removal" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Pet Stain Removal tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Pet Stain & Odor Removal</h3>
                        <p class="service-card-description">Say goodbye to messes with pet stain and odor removal in Brooklyn, restoring freshness to carpets and upholstery.</p>
                        <a href="/services/pet-stain-and-odor-removal" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                        <div class="service-card">
                    <a href="/services/commercial-services" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Commercial Cleaning tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Commercial Services</h3>
                        <p class="service-card-description">Reliable commercial cleaning in Brooklyn for offices, retail spaces, and businesses, ensuring a professional and clean environment.</p>
                        <a href="/services/commercial-services" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
        
                                 <div class="service-card">
                    <a href="/services/eco-friendly-cleaning" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/eco friendly tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Eco-Friendly Cleaning</h3>
                        <p class="service-card-description">Go green with our eco-friendly cleaning services in Brooklyn, using non-toxic products safe for families and pets.</p>
                        <a href="/services/eco-friendly-cleaning" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
         
                             <!-- Row 4 - Additional Services (Hidden by default) -->
                           <div class="service-card additional-service-card">
                    <a href="/services/upholstery-cleaning" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Upholstery Cleaning tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Upholstery Cleaning</h3>
                        <p class="service-card-description">Revive sofas, chairs, and furniture with professional upholstery cleaning in Brooklyn, removing dirt, stains, and odors.</p>
                        <a href="/services/upholstery-cleaning" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
           
                           <div class="service-card additional-service-card">
                    <a href="/services/window-treatment" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Window Treatment tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Window Treatment</h3>
                        <p class="service-card-description">Enhance your interiors with stylish and functional window treatment services in Brooklyn, offering custom solutions.</p>
                        <a href="/services/window-treatment" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
           
                           <div class="service-card additional-service-card">
                    <a href="/services/bed-bug-treatment" class="service-card-image-link">
                        <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Bed Bug Treatment tile image.webp');"></div>
                    </a>
                    <div class="service-card-content">
                        <h3 class="service-card-heading">Bed Bug Treatment</h3>
                        <p class="service-card-description">Effective bed bug treatment in Brooklyn to eliminate infestations safely and protect your home with proven methods.</p>
                        <a href="/services/bed-bug-treatment" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
                    </div>
                </div>
           
           <div class="service-card additional-service-card">
               <a href="/services/allergy-control" class="service-card-image-link">
                   <div class="service-card-image" style="background-image: url('/images/services images/all services cards images/Allergy Control tile image.webp');"></div>
               </a>
               <div class="service-card-content">
                   <h3 class="service-card-heading">Allergy Control</h3>
                   <p class="service-card-description">Breathe easier with allergy control cleaning services in Brooklyn, designed to remove allergens and improve air quality.</p>
                   <a href="/services/allergy-control" class="service-card-link">Learn More <span class="learn-more-arrow"></span></a>
               </div>
           </div>
     </div>
     
                     <!-- View All Services Section -->
     <label for="toggle-services-checkbox" class="view-all-services-container" id="viewAllServicesBtn" style="cursor: pointer;">
         <div class="view-all-services">View All Services</div>
         <div class="view-all-services-arrow">
             <div class="ellipse-div">
                 <img class="arrow-icon" alt="Arrow" src="/images/services images/icons/Arrow.svg">
             </div>
         </div>
     </label>
     

      
      <!-- JavaScript moved to footer -->
      
      <style>
      @keyframes fadeInUp {
          from {
              opacity: 0;
              transform: translateY(20px);
          }
          to {
              opacity: 1;
              transform: translateY(0);
          }
      }
      
      @keyframes fadeOutDown {
          from {
              opacity: 1;
              transform: translateY(0);
          }
          to {
              opacity: 0;
              transform: translateY(20px);
          }
      }
      
             .arrow-icon {
           transition: transform 0.3s ease;
       }
       
       /* Ensure grid can expand properly */
       .services-grid {
           min-height: auto;
       }
       
       /* Pure CSS Toggle - Hide additional cards by default */
       .service-card.additional-service-card { 
           display: none !important; 
           visibility: hidden !important;
       }
       
       /* Show additional cards when checkbox is checked */
       #toggle-services-checkbox:checked ~ .services-grid .service-card.additional-service-card { 
           display: flex !important; 
           visibility: visible !important;
           opacity: 1 !important;
           animation: fadeInUp 0.3s ease-out !important;
       }
       
       /* Change button text when checked */
       #toggle-services-checkbox:checked ~ * .view-all-services {
           font-size: 0 !important;
       }
       
       #toggle-services-checkbox:checked ~ * .view-all-services::after {
           content: "Show Less" !important;
           font-size: 18px !important;
           font-weight: 500 !important;
           font-family: 'Open Sans' !important;
           color: #000 !important;
       }
       
       /* Rotate arrow when checked */
       #toggle-services-checkbox:checked ~ * .arrow-icon {
           transform: rotate(180deg) !important;
           transition: transform 0.3s ease !important;
       }
       
       /* Smooth arrow transition */
       .arrow-icon {
           transition: transform 0.3s ease !important;
       }
       

              </style>
</div>

<!-- Building Trust, Delivering Excellence Section -->
<div class="trust-excellence-section">
    <div class="trust-excellence-container">
        <div class="trust-excellence-left">
            <img class="trust-excellence-image" alt="Trust and Excellence" src="/images/services images/Building Trust.webp">
        </div>
        <div class="trust-excellence-right">
            <div class="building-trust-delivering-container">
                <span class="building-trust-delivering-building-trust-delivering-container">
                    <p class="building-trust-delivering-exc">
                        <span class="building">Building </span>
                        <span class="trust">Trust</span>
                        <span>, Delivering</span><br>
                        <span>Excellence</span>
                    </p>
                </span>
            </div>
            <div class="at-a-and-container">
                <p class="at-a-and">At A and B Carpet, we specialize in delivering the best carpet cleaning in Brooklyn with unmatched quality and care. With over 30 years of experience, our professional team provides the best services in the USA for carpet cleaning, rug cleaning, upholstery care, and reliable restorations. </br> We have proudly served over 20,000 homes and businesses, earning thousands of repeat clients and satisfied customers who trust us year after year. Whether it's deep carpet cleaning, area rug restoration, or stain removal, no job is too small or too big for our experts. If you're searching for the best carpet cleaning in Brooklyn that guarantees results, A and B Carpet is your trusted choice</p>
            </div>
        </div>
    </div>
</div>

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
                <div class="help-desc">Make a first carpet cleaning service with a 20 percent discount</div>
                <a href="/contact" class="help-button primary-button">Get Quote</a>
            </div>
            
            <div class="help-card">
                <div class="help-icon">
                    <img src="/images/services images/we are here to help you/need quick service.svg" alt="Quick service">
                </div>
                <div class="help-title">Need Quick Service?</div>
                <div class="help-desc">Book today to have your Stained carpet cleaned on the same day</div>
                <a href="/contact" class="help-button secondary-button">Chat With Us</a>
            </div>
            
            <div class="help-card">
                <div class="help-icon">
                    <img src="/images/services images/we are here to help you/why wait.svg" alt="Why wait">
                </div>
                <div class="help-title">Why Wait?</div>
                <div class="help-desc">Brooklyn Carpet Cleaner (licensed, bonded and insured)</div>
                <a href="tel:{{ Config::get('page.phone_use') }}" class="help-button primary-button">Call Now</a>
            </div>
        </div>
    </div>
</section>

@include('inc.footer')

<style>
/* Ensure button is clickable and visible */
.view-all-services-container {
    position: relative !important;
    z-index: 9999 !important;
    pointer-events: auto !important;
    cursor: pointer !important;
    background: transparent !important;
    padding: 10px !important;
    border-radius: 5px !important;
}

.view-all-services-container:hover {
    background: transparent !important;
}
</style>




