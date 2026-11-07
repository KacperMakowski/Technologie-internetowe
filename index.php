<?php
$firma = 'Szyprycha';
$rok = date('Y');
$imie = $_GET['imie'] ?? 'Gościu';

$cennik = [
    ['nazwa' => 'Regulacja przerzutki (przód lub tył) + prostowanie haka', 'czas' => 'od ręki / 30 min', 'cena' =>  45],
    ['nazwa' => 'Odpowietrzanie hamulca hydraulicznego (1 koło, z płynem)', 'czas' => '1 dzień roboczy', 'cena' => 75],
    ['nazwa' => 'Wymiana dętki lub opony (wraz z kontrolą opaski i ciśnienia)', 'czas' => 'od ręki / 20 min', 'cena' => 35],
    ['nazwa' => 'Konwersja kół na system bezdętkowy Tubeless (para, bez mleczka)', 'czas' => '1 dzień roboczy', 'cena' => 110],
    ['nazwa' => 'Centrowanie koła z korekcją bicia bocznego i promieniowego', 'czas' => '1–2 dni robocze', 'cena' => 70],
];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szprycha – Serwis Rowerowy Bydgoszcz | Profesjonalna Naprawa Rowerów</title>
    <meta name="description" content="Pracownia rowerowa Szprycha w Bydgoszczy. Oferujemy kompleksowy serwis rowerowy, przeglądy okresowe, naprawę rowerów oraz składanie projektów custom. Odwiedź nas!">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/svg+xml" href="static/logo-szprycha.svg">
    <script src="js/app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a class="logo" href="#">
                <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
                    <title id="logo-tytul">Szprycha</title>
                    <circle cx="28" cy="42" r="18" fill="none" stroke="currentColor" stroke-width="3" />
                    <circle cx="92" cy="42" r="18" fill="none" stroke="currentColor" stroke-width="3" />
                    <polyline points="28,42 56,42 76,20 40,20 28,42" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <polyline points="56,42 48,14 44,14" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <polyline points="76,20 92,42 84,12 80,12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="logo-text">Szprycha<span class="logo-accent">.</span></span>
            </a>
            <button class="menu-toggle" aria-label="Menu" aria-expanded="false">
                <svg class="hamburger-icon" viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <line class="line line--top" x1="4" y1="6" x2="20" y2="6"></line>
                    <line class="line line--mid" x1="4" y1="12" x2="20" y2="12"></line>
                    <line class="line line--bot" x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            </button>
            <nav class="main-nav" aria-label="Główna nawigacja">
                <ul class="nav-list">
                    <li><a href="#uslugi" class="nav-link">Usługi</a></li>
                    <li><a href="#cennik" class="nav-link">Cennik</a></li>
                    <li><a href="#kontakt" class="nav-link nav-cta">Kontakt</a></li> 
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="uslugi">
            <div class="container">
                <div class="hero">
                    <div class="hero-content">
                        <p class="greeting-badge hero-animate stagger-1">Cześć, <?= htmlspecialchars($imie) ?>!</p>
                        <span class="hero-badge hero-animate stagger-1">Twój lokalny warsztat w Bydgoszczy</span>
                        <h1 class="hero-animate stagger-2">Szprycha – Serwis Rowerowy Bydgoszcz</h1>
                        <p class="hero-description hero-animate stagger-3">
                            Profesjonalna <strong>naprawa rowerów w Bydgoszczy</strong> bez kolejek i ukrytych kosztów. Pracownia rowerowa Szprycha to miejsce, w którym pasja spotyka się z inżynieryjną precyzją. Dbamy o każdy detal Twojego jednośladu – od regulacji napędów po zaawansowany serwis amortyzatorów i budowę projektów custom.
                        </p>
                        <div class="hero-actions hero-animate stagger-4">
                            <a href="#kontakt" class="btn btn-primary">Umów wizytę w serwisie</a>
                            <a href="#cennik" class="btn btn-outline">Sprawdź cennik</a>
                        </div>
                    </div>
                    <div class="hero-media hero-image-animate">
                        <img 
                            src="static/mechanik-wykonujacy-przeglad-napedu-w-pracowni.jpg" 
                            alt="Mechanik wykonujący przegląd napędu w pracowni i serwisie rowerowym Szprycha w Bydgoszczy" 
                            class="hero-img"
                            width="800"
                            height="600"
                        >
                    </div>
                </div>

                <div class="services-block">
                    <div class="section-header scroll-animate">
                        <span class="section-subtitle">Oferta warsztatu</span>
                        <h2>Pakiety serwisowe – kompleksowa naprawa rowerów Bydgoszcz</h2>
                        <p>Wybierz pakiet dopasowany do stanu Twojego jednośladu. W pracowni rowerowej Szprycha używamy wyłącznie chemii i narzędzi klasy premium.</p>
                    </div>

                    <div class="cards-grid">
                        <article class="card scroll-scale">
                            <div class="card-header">
                                <h3>Przegląd Podstawowy</h3>
                                <p class="card-desc">Idealny przed rozpoczęciem sezonu lub po zakupie nowego roweru, aby bezpiecznie ruszyć w trasę.</p>
                                <div class="card-price">
                                    <span class="price-amount">159 zł</span>
                                    <span class="price-note">+ ewentualne części</span>
                                </div>
                            </div>
                            <ul class="card-features">
                                <li>Regulacja przerzutek przedniej i tylnej</li>
                                <li>Regulacja hamulców (szczękowych lub tarczowych)</li>
                                <li>Czyszczenie i smarowanie łańcucha</li>
                                <li>Kontrola połączeń śrubowych kluczem dynamometrycznym</li>
                                <li>Weryfikacja stanu opon i uzupełnienie ciśnienia</li>
                            </ul>
                            <a href="#kontakt" class="btn btn-outline card-btn">Wybierz pakiet</a>
                        </article>

                        <article class="card card--highlight scroll-scale">
                            <span class="card-badge">Najczęściej wybierany</span>
                            <div class="card-header">
                                <h3>Przegląd Kompleksowy</h3>
                                <p class="card-desc">Pełne SPA i gruntowny serwis rowerowy dla wymagających rowerzystów z Bydgoszczy i okolic.</p>
                                <div class="card-price">
                                    <span class="price-amount">329 zł</span>
                                    <span class="price-note">+ ewentualne części</span>
                                </div>
                            </div>
                            <ul class="card-features">
                                <li>Wszystkie czynności z Przeglądu Podstawowego</li>
                                <li>Demontaż i mycie napędu w myjce ultradźwiękowej</li>
                                <li>Centrowanie kół i kontrola naciągu szprych</li>
                                <li>Serwis i smarowanie łożysk sterów, suportu oraz piast</li>
                                <li>Odpowietrzanie hamulców hydraulicznych lub wymiana linek</li>
                                <li>Kompleksowe mycie i konserwacja ramy</li>
                            </ul>
                            <a href="#kontakt" class="btn btn-primary card-btn">Wybierz pakiet</a>
                        </article>

                        <article class="card scroll-scale">
                            <div class="card-header">
                                <h3>Składanie Customów</h3>
                                <p class="card-desc">Budowa wymarzonego roweru od gołej ramy, konwersje napędów oraz zaawansowany tuning wagowy.</p>
                                <div class="card-price">
                                    <span class="price-amount">od 450 zł</span>
                                    <span class="price-note">wycena indywidualna</span>
                                </div>
                            </div>
                            <ul class="card-features">
                                <li>Konsultacja techniczna i dobór kompatybilnych części</li>
                                <li>Planowanie mufy suportu, główki ramy i mocowań hamulca</li>
                                <li>Zaplatanie kół na zamówienie z tensometrem</li>
                                <li>Wewnętrzne prowadzenie pancerzy i przewodów Di2 / AXS</li>
                                <li>Konfiguracja systemu bezdętkowego (Tubeless Ready)</li>
                            </ul>
                            <a href="#kontakt" class="btn btn-outline card-btn">Zapytaj o wycenę</a>
                        </article>
                    </div>
                </div>

                <div id="cennik" class="pricing-block">
                    <div class="section-header scroll-animate">
                        <span class="section-subtitle">Przejrzyste stawki</span>
                        <h2>Szczegółowy cennik usług serwisowych</h2>
                        <p>Potrzebujesz pojedynczej naprawy? Sprawdź ceny najczęściej wykonywanych usług w naszym serwisie rowerowym w Bydgoszczy.</p>
                    </div>

                    <div class="table-wrapper scroll-animate">
                        <table class="pricing-table">
                            <thead>
                                <tr>
                                    <th scope="col">Usługa serwisowa</th>
                                    <th scope="col">Czas realizacji</th>
                                    <th scope="col">Cena brutto</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cennik as $usluga): ?>
                                <tr>
                                    <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                                    <td><?= htmlspecialchars($usluga['czas']) ?></td>
                                    <td class="table-price"><?= $usluga['cena'] ?> zł</td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="pricing-chart-box scroll-animate">
                        <h3>Wykres cen usług (zł)</h3>
                        <div class="chart-wrapper">
                            <svg viewBox="0 0 700 <?= count($cennik) * 44 + 30 ?>" class="pricing-chart" role="img" aria-label="Wykres cen usług">
                                <?php 
                                $max_cena = max(array_column($cennik, 'cena'));
                                foreach ($cennik as $idx => $usluga): 
                                    $y = $idx * 44 + 20;
                                    $bar_w = round(($usluga['cena'] / $max_cena) * 320);
                                ?>
                                    <text x="0" y="<?= $y + 14 ?>" class="chart-label"><?= htmlspecialchars(mb_strimwidth($usluga['nazwa'], 0, 36, '...')) ?></text>
                                    <rect x="290" y="<?= $y ?>" width="<?= $bar_w ?>" height="20" rx="4" class="chart-bar" />
                                    <text x="<?= 290 + $bar_w + 10 ?>" y="<?= $y + 15 ?>" class="chart-val"><?= $usluga['cena'] ?> zł</text>
                                <?php endforeach; ?>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontakt" class="contact-section">
            <div class="container">
                <div class="section-header scroll-animate">
                    <span class="section-subtitle">Zajrzyj do nas</span>
                    <h2>Kontakt – Pracownia Rowerowa Szprycha Bydgoszcz</h2>
                    <p>Zostaw rower w rękach pasjonatów. Zadzwoń, napisz przez formularz lub odwiedź nasz serwis rowerowy w centrum Bydgoszczy.</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-info">
                        <div class="info-cards">
                            <div class="info-item scroll-animate">
                                <h3>Adres warsztatu</h3>
                                <p>Pracownia Rowerowa Szprycha</p>
                                <p>ul. Gdańska 84 (wejście od podwórza)</p>
                                <p>85-021 Bydgoszcz</p>
                            </div>
                            <div class="info-item scroll-animate">
                                <h3>Godziny otwarcia</h3>
                                <p>Poniedziałek – Piątek: <strong>10:00 – 18:00</strong></p>
                                <p>Sobota: <strong>10:00 – 14:00</strong></p>
                                <p>Niedziela: nieczynne (kręcimy kilometry)</p>
                            </div>
                            <div class="info-item scroll-animate">
                                <h3>Szybki kontakt</h3>
                                <p>Tel: <a href="tel:+48523004050" class="contact-link">+48 52 300 40 50</a></p>
                                <p>Kom: <a href="tel:+48600700800" class="contact-link">+48 600 700 800</a></p>
                                <p>E-mail: <a href="mailto:serwis@szprychabydgoszcz.pl" class="contact-link">serwis@szprychabydgoszcz.pl</a></p>
                            </div>
                        </div>

                        <div class="workshop-media scroll-scale">
                            <img 
                                src="static/nowoczesne-wnetrze-pracowni-rowerowej-szprycha-w-bydgoszczy.jpg" 
                                alt="Nowoczesne wnętrze pracowni rowerowej Szprycha w Bydgoszczy z tablicą narzędziową i stanowiskiem serwisowym" 
                                class="workshop-img"
                                width="800"
                                height="450"
                            >
                        </div>
                    </div>

                    <div class="contact-form-box scroll-scale">
                        <h3>Zarezerwuj termin naprawy</h3>
                        <p class="form-intro">Opisz krótko, czego potrzebuje Twój rower. Odpowiemy z propozycją terminu w ciągu kilku godzin.</p>
                        <form action="#" method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="name">Imię i nazwisko</label>
                                <input type="text" id="name" name="name" placeholder="np. Jan Kowalski" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon lub adres e-mail</label>
                                <input type="text" id="phone" name="phone" placeholder="np. 600 100 200" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Rodzaj usługi</label>
                                <select id="service" name="service">
                                    <option value="kompleksowy">Przegląd Kompleksowy (329 zł)</option>
                                    <option value="podstawowy">Przegląd Podstawowy (159 zł)</option>
                                    <option value="custom">Składanie Customów / Tuning</option>
                                    <option value="usterka">Pojedyncza naprawa / Inna usterka</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Model roweru i opis zgłoszenia</label>
                                <textarea id="message" name="message" rows="4" placeholder="Napisz, jaki to rower, co się dzieje i jaki termin Cię interesuje..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary form-submit">Wyślij zgłoszenie do serwisu</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p><?= $firma ?> &copy; | <?= $rok ?> | Pracownia Rowerowa Szprycha | Serwis Rowerowy Bydgoszcz | Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>
</body>
</html>