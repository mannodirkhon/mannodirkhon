AOS.init();

const swiper = new Swiper('.projects-slider', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
});

const translations = {
    en: {
        nav_about: 'About',
        nav_services: 'Services',
        nav_projects: 'Projects',
        nav_contacts: 'Contacts',
        hero_slogan: 'Reliable facade solutions from the top.',
        hero_sub: 'Engineering, installation and maintenance.',
        cta: 'Request a Quote',
        about_title: 'About Us',
        about_text: 'Apex Facade delivers safe and modern facade solutions across multiple countries. Our team combines engineering expertise with years of field experience.',
        services_title: 'Services',
        service_cladding: 'Facade Cladding',
        service_cladding_text: 'Installation of ventilated and decorative facades.',
        service_repair: 'Maintenance & Repair',
        service_repair_text: 'Inspection and restoration of facade systems.',
        service_insulation: 'Thermal Insulation',
        service_insulation_text: 'Energy‑saving facade insulation.',
        service_cleaning: 'Cleaning',
        service_cleaning_text: 'Professional facade and window cleaning.',
        service_consulting: 'Consulting',
        service_consulting_text: 'Technical consulting for facade projects.',
        advantages_title: 'Our Advantages',
        adv_years: 'years of experience',
        adv_projects: 'completed projects',
        adv_height: 'working heights',
        adv_accidents: 'accidents',
        projects_title: 'Projects',
        certificates_title: 'Certificates',
        contact_title: 'Contact Us',
        form_name: 'Name',
        form_phone: 'Phone',
        form_message: 'Message',
        form_send: 'Send'
    },
    ru: {
        nav_about: 'О нас',
        nav_services: 'Услуги',
        nav_projects: 'Проекты',
        nav_contacts: 'Контакты',
        hero_slogan: 'Надежные фасадные решения с высоты.',
        hero_sub: 'Проектирование, монтаж и обслуживание.',
        cta: 'Запросить смету',
        about_title: 'О компании',
        about_text: 'Apex Facade предоставляет безопасные и современные фасадные решения в нескольких странах. Наша команда сочетает инженерный опыт с многолетней практикой.',
        services_title: 'Услуги',
        service_cladding: 'Фасадное облицовывание',
        service_cladding_text: 'Монтаж вентилируемых и декоративных фасадов.',
        service_repair: 'Обслуживание и ремонт',
        service_repair_text: 'Обследование и восстановление фасадных систем.',
        service_insulation: 'Теплоизоляция',
        service_insulation_text: 'Энергосберегающая фасадная изоляция.',
        service_cleaning: 'Мойка',
        service_cleaning_text: 'Профессиональная мойка фасадов и окон.',
        service_consulting: 'Консалтинг',
        service_consulting_text: 'Технический консалтинг фасадных проектов.',
        advantages_title: 'Наши преимущества',
        adv_years: 'лет опыта',
        adv_projects: 'выполненных проектов',
        adv_height: 'рабочие высоты',
        adv_accidents: 'несчастных случаев',
        projects_title: 'Проекты',
        certificates_title: 'Сертификаты',
        contact_title: 'Свяжитесь с нами',
        form_name: 'Имя',
        form_phone: 'Телефон',
        form_message: 'Сообщение',
        form_send: 'Отправить'
    },
    tr: {
        nav_about: 'Hakkımızda',
        nav_services: 'Hizmetler',
        nav_projects: 'Projeler',
        nav_contacts: 'İletişim',
        hero_slogan: 'Zirveden güvenilir cephe çözümleri.',
        hero_sub: 'Mühendislik, montaj ve bakım.',
        cta: 'Teklif Al',
        about_title: 'Biz Kimiz',
        about_text: 'Apex Facade birden fazla ülkede güvenli ve modern cephe çözümleri sunar. Ekibimiz mühendislik uzmanlığını uzun yıllara dayanan saha deneyimiyle birleştirir.',
        services_title: 'Hizmetler',
        service_cladding: 'Cephe Kaplama',
        service_cladding_text: 'Havalandırmalı ve dekoratif cephe montajı.',
        service_repair: 'Bakım ve Onarım',
        service_repair_text: 'Cephe sistemlerinin incelenmesi ve onarımı.',
        service_insulation: 'Isı Yalıtımı',
        service_insulation_text: 'Enerji tasarruflu cephe yalıtımı.',
        service_cleaning: 'Temizlik',
        service_cleaning_text: 'Profesyonel cephe ve cam temizliği.',
        service_consulting: 'Danışmanlık',
        service_consulting_text: 'Cephe projeleri için teknik danışmanlık.',
        advantages_title: 'Avantajlarımız',
        adv_years: 'yıllık deneyim',
        adv_projects: 'tamamlanan proje',
        adv_height: 'çalışma yüksekliği',
        adv_accidents: 'kaza',
        projects_title: 'Projeler',
        certificates_title: 'Sertifikalar',
        contact_title: 'İletişim',
        form_name: 'Ad',
        form_phone: 'Telefon',
        form_message: 'Mesaj',
        form_send: 'Gönder'
    }
};

function setLanguage(lang) {
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (translations[lang] && translations[lang][key]) {
            el.textContent = translations[lang][key];
        }
    });
    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.getAttribute('data-i18n-placeholder');
        if (translations[lang] && translations[lang][key]) {
            el.setAttribute('placeholder', translations[lang][key]);
        }
    });
}

setLanguage('en');

document.querySelectorAll('.language-switcher [data-lang]').forEach(btn => {
    btn.addEventListener('click', () => setLanguage(btn.dataset.lang));
});
