# 📊 PODSUMOWANIE ANALIZY REPOZYTORIUM

**Typ projektu:** PrestaShop E-commerce - Sklep internetowy z odzieżą damską  
**Technologie:** PHP 7.4+/8.x, MySQL 5.7+/8.0+, JavaScript/jQuery, Smarty Template Engine, Bootstrap/Tailwind  
**Architektura:** Monolityczna (PrestaShop), integracja dropshipping API (FactoryPrice), premium theme w /src, produkcja w /dist  
**Środowisko:** LAMP/LEMP stack, możliwa konteneryzacja Docker, deployment na shared hosting lub VPS  
**Specyfika:** Rynek niemiecki, optymalizacja SEO/PageSpeed, integracja z hurtownią, obsługa płatności EU

**Status repozytorium:** Nowe/puste - wymaga pełnej konfiguracji infrastruktury od podstaw.

---

# 🎯 KOMPLETNA LISTA PLIKÓW DO WYGENEROWANIA

## PRIORYTET 1️⃣ NAJWYŻSZY - Dokumentacja AI i Instrukcje (ROZPOCZNIJ OD TYCH)

### Dokumentacja agentów AI

1. **AGENTS.md** - Szczegółowa specyfikacja wszystkich AI agentów dla projektu PrestaShop
2. **CLAUDE.md** - Instrukcje operacyjne dla Claude AI Projects
3. **OLLAMA.md** - Konfiguracja i instrukcje dla Ollama (lokalne modele AI)
4. **QWEN.md** - Instrukcje dla Qwen AI Desktop
5. **README.agents.md** - Przewodnik użytkowania agentów AI w projekcie

### Prompts i instrukcje

6. **.github/prompts/prestashop-development.md** - Prompty dla rozwoju PrestaShop
7. **.github/prompts/dropshipping-integration.md** - Prompty dla integracji dropshipping
8. **.github/prompts/seo-optimization.md** - Prompty dla optymalizacji SEO
9. **.github/prompts/german-ecommerce.md** - Prompty dla e-commerce na rynek niemiecki
10. **.github/prompt-snippets/code-review.md** - Snippet'y do code review
11. **.github/prompt-snippets/testing.md** - Snippet'y do testowania
12. **README.prompts.md** - Dokumentacja systemu promptów

### Instrukcje operacyjne

13. **.github/instructions/setup-dev-environment.md** - Instrukcje setup środowiska dev
14. **.github/instructions/deployment-production.md** - Instrukcje deployment na produkcję
15. **.github/instructions/theme-customization.md** - Instrukcje customizacji motywu
16. **.github/instructions/api-integration.md** - Instrukcje integracji API
17. **README.instructions.md** - Indeks wszystkich instrukcji
18. **copilot-instructions.md** - Globalne instrukcje dla GitHub Copilot

### Konfiguracje AI

19. **.claude-plugin** - Plugin settings dla Claude
20. **.claude** - Claude project configuration
21. **.copilot** - GitHub Copilot workspace settings
22. **.cursorrules** - Cursor IDE rules

### Baza wiedzy

23. **.github/knowledge/prestashop-architecture.md** - Architektura PrestaShop
24. **.github/knowledge/factoryprice-api.md** - Dokumentacja API FactoryPrice
25. **.github/knowledge/german-ecommerce-regulations.md** - Regulacje prawne DE
26. **.github/knowledge/seo-best-practices.md** - Best practices SEO

### Agents definitions

27. **.github/agents/prestashop-developer.json** - Agent developer PrestaShop
28. **.github/agents/seo-specialist.json** - Agent SEO specialist
29. **.github/agents/code-reviewer.json** - Agent code reviewer
30. **.github/agents/deployment-manager.json** - Agent deployment manager

### Chat modes

31. **.github/chatmodes/development.json** - Tryb development
32. **.github/chatmodes/debugging.json** - Tryb debugging
33. **.github/chatmodes/optimization.json** - Tryb optimization

## PRIORYTET 2️⃣ WYSOKI - GitHub Actions Workflows

### CI/CD Workflows

34. **.github/workflows/ci.yml** - Continuous Integration (PHP CS, PHPStan, tests)
35. **.github/workflows/cd.yml** - Continuous Deployment (FTP/SFTP deploy)
36. **.github/workflows/tests.yml** - Automated testing (PHPUnit, Playwright)
37. **.github/workflows/build-theme.yml** - Build motywu (Webpack/Gulp)
38. **.github/workflows/deploy-production.yml** - Deploy na produkcję
39. **.github/workflows/deploy-staging.yml** - Deploy na staging

### Quality & Security

40. **.github/workflows/code-quality.yml** - PHP CS Fixer, ESLint, Stylelint
41. **.github/workflows/security-scan.yml** - Security scanning (Snyk, OWASP)
42. **.github/workflows/dependency-update.yml** - Automated dependency updates
43. **.github/workflows/lighthouse-ci.yml** - Lighthouse CI (PageSpeed)
44. **.github/workflows/seo-audit.yml** - Automated SEO audit

### PrestaShop Specific

45. **.github/workflows/prestashop-module-validate.yml** - Walidacja modułów PS
46. **.github/workflows/factoryprice-sync.yml** - Sync produktów z FactoryPrice
47. **.github/workflows/cache-clear.yml** - Czyszczenie cache PrestaShop

### Monitoring & Alerts

48. **.github/workflows/uptime-monitor.yml** - Monitoring uptime
49. **.github/workflows/performance-monitor.yml** - Monitoring wydajności

## PRIORYTET 3️⃣ WYSOKI - Dokumentacja Projektowa

### Główna dokumentacja

50. **README.md** - Główny README projektu (PL/DE/EN)
51. **CONTRIBUTING.md** - Wytyczne dla kontrybutorów
52. **CODE_OF_CONDUCT.md** - Kodeks postępowania
53. **SECURITY.md** - Polityka bezpieczeństwa i raportowanie
54. **CHANGELOG.md** - Historia zmian w projekcie
55. **LICENSE** - Licencja projektu

### Dokumentacja techniczna

56. **docs/ARCHITECTURE.md** - Architektura systemu PrestaShop
57. **docs/API-DOCUMENTATION.md** - Dokumentacja API (własne + FactoryPrice)
58. **docs/DATABASE-SCHEMA.md** - Schemat bazy danych
59. **docs/DEPLOYMENT-GUIDE.md** - Szczegółowy przewodnik deployment
60. **docs/TROUBLESHOOTING.md** - Rozwiązywanie problemów

### Dokumentacja biznesowa

61. **docs/BRAND-SETTINGS.md** - Ustawienia brandingu i identyfikacji wizualnej
62. **docs/DESIGN-SYSTEM.md** - System designu (kolory, typografia, komponenty)
63. **docs/SEO-STRATEGY.md** - Strategia SEO dla rynku niemieckiego
64. **docs/CONTENT-STRATEGY.md** - Strategia contentu
65. **docs/ROADMAP.md** - Roadmap rozwoju projektu

### Kolekcje i zasoby

66. **README.collections.md** - Dokumentacja kolekcji (produkty, kategorie)
67. **README.skills.md** - Dokumentacja skills (Claude Code Skills)
68. **collections/product-categories.json** - Struktura kategorii produktów
69. **collections/menu-structure.json** - Struktura menu strony
70. **collections/brand-assets.json** - Zasoby brandingowe

## PRIORYTET 4️⃣ ŚREDNI - Pre-commit Hooks i Quality Tools

### Pre-commit

71. **.pre-commit-config.yaml** - Konfiguracja pre-commit hooks
72. **.github/workflows/pre-commit.yml** - Pre-commit CI workflow

### Linters i formatters

73. **.php-cs-fixer.dist.php** - PHP CS Fixer config
74. **phpstan.neon** - PHPStan static analysis
75. **phpmd.xml** - PHP Mess Detector
76. **.eslintrc.js** - ESLint dla JavaScript
77. **.stylelintrc.json** - Stylelint dla CSS/SCSS
78. **.prettierrc** - Prettier config
79. **.editorconfig** - EditorConfig dla spójności

### Testing

80. **phpunit.xml** - PHPUnit configuration
81. **tests/Unit/.gitkeep** - Katalog testów jednostkowych
82. **tests/Integration/.gitkeep** - Katalog testów integracyjnych
83. **tests/E2E/playwright.config.js** - Playwright E2E tests
84. **tests/E2E/specs/checkout.spec.js** - Przykładowy test checkout
85. **tests/bootstrap.php** - Bootstrap testów PHP

## PRIORYTET 5️⃣ ŚREDNI - Docker i Development Environment

### Docker

86. **docker-compose.yml** - Multi-container setup (PrestaShop, MySQL, phpMyAdmin)
87. **docker-compose.dev.yml** - Development override
88. **docker-compose.prod.yml** - Production override
89. **Dockerfile** - Custom PrestaShop image
90. **.dockerignore** - Docker ignore rules
91. **docker/nginx/default.conf** - Nginx config dla PrestaShop
92. **docker/php/php.ini** - Custom PHP settings
93. **docker/mysql/init.sql** - Initial DB setup

### Development tools

94. **Makefile** - Automation commands (make install, make test, make deploy)
95. **scripts/setup.sh** - Initial setup script
96. **scripts/install-prestashop.sh** - PrestaShop installation
97. **scripts/install-dependencies.sh** - Composer + npm install
98. **scripts/build-theme.sh** - Theme build script
99. **scripts/deploy.sh** - Deployment script
100. **scripts/backup-db.sh** - Database backup
101. **scripts/sync-products.sh** - FactoryPrice product sync

## PRIORYTET 6️⃣ ŚREDNI - Environment Configuration

### Environment files

102. **.env.example** - Environment variables template
103. **.env.development** - Development environment
104. **.env.staging** - Staging environment
105. **.env.production** - Production environment (secrets via GitHub Secrets)
106. **config/settings.inc.php.example** - PrestaShop settings template

### Configuration files

107. **composer.json** - PHP dependencies
108. **composer.lock** - Locked dependencies
109. **package.json** - Node.js dependencies (theme build)
110. **package-lock.json** - Locked npm dependencies
111. **webpack.config.js** - Webpack dla theme assets
112. **gulpfile.js** - Gulp tasks (alternative to Webpack)

## PRIORYTET 7️⃣ NISKI - Version Control i IDE

### Git configuration

113. **.gitignore** - Comprehensive gitignore dla PrestaShop
114. **.gitattributes** - Git attributes (line endings, merge strategies)
115. **CODEOWNERS** - Code owners dla review

### IDE configuration

116. **.vscode/settings.json** - VS Code workspace settings
117. **.vscode/extensions.json** - Recommended extensions
118. **.vscode/launch.json** - Debug configurations
119. **.vscode/tasks.json** - Tasks (build, test, deploy)
120. **.idea/.gitignore** - PhpStorm/IntelliJ gitignore (jeśli używane)

## PRIORYTET 8️⃣ NISKI - Security i Compliance

### Security

121. **.github/dependabot.yml** - Automated dependency updates
122. **.snyk** - Snyk security monitoring
123. **security.txt** - Security policy public file
124. **.htaccess** - Apache security headers (dla produkcji)
125. **templates/htaccess-security.txt** - Template .htaccess z security rules

### GDPR i Legal

126. **docs/GDPR-COMPLIANCE.md** - GDPR compliance guide
127. **docs/IMPRESSUM.md** - Impressum template (wymagane w DE)
128. **docs/DATENSCHUTZ.md** - Datenschutzerklärung template (polityka prywatności)
129. **docs/AGB.md** - Allgemeine Geschäftsbedingungen (regulamin)
130. **docs/WIDERRUFSRECHT.md** - Prawo odstąpienia (wymagane EU)

## PRIORYTET 9️⃣ NISKI - SEO i Meta

### SEO Templates

131. **templates/meta-tags-template.html** - Meta tags template
132. **templates/schema-json-ld.json** - Schema.org structured data
133. **templates/sitemap-template.xml** - Sitemap template
134. **templates/robots-txt-template.txt** - Robots.txt template
135. **templates/blog-post-template.md** - Blog post SEO template

### SEO Configuration

136. **seo/german-keywords.json** - Deutsche keywords research
137. **seo/competitor-analysis.md** - Analiza konkurencji
138. **seo/content-calendar.md** - Kalendarz contentu

## PRIORYTET 🔟 OPCJONALNY - Additional Tools

### MCP (Model Context Protocol)

139. **mcp.json** - MCP server configuration
140. **.github/mcp/servers.json** - MCP servers registry
141. **.github/mcp/tools.json** - Custom MCP tools

### Schemas

142. **.schemas/product-schema.json** - JSON schema dla produktów
143. **.schemas/category-schema.json** - JSON schema dla kategorii
144. **.schemas/order-schema.json** - JSON schema dla zamówień

### Internationalization

145. **translations/de-DE.json** - German translations
146. **translations/en-US.json** - English translations (fallback)

### Monitoring

147. **monitoring/lighthouse-config.js** - Lighthouse custom config
148. **monitoring/uptime-config.json** - Uptime monitor config
149. **monitoring/error-tracking.js** - Error tracking setup (Sentry)

### Backup

150. **backup/backup-config.json** - Automated backup configuration
151. **backup/restore-guide.md** - Restore procedure

---

# 📝 STRUKTURA MENU I KATEGORII PRODUKTOWYCH (Niemiecki rynek)

## Główne menu nawigacyjne

```
🏠 Startseite (Home)
👗 Damenbekleidung (Odzież damska)
  ├─ Kleider (Sukienki)
  │  ├─ Partykleider (Sukienki wieczorowe)
  │  ├─ Sommerkleider (Sukienki letnie)
  │  ├─ Cocktailkleider (Sukienki koktajlowe)
  │  └─ Maxikleider (Sukienki maxi)
  ├─ Oberteile (Bluzki/Topy)
  │  ├─ Blusen (Bluzki)
  │  ├─ T-Shirts (Koszulki)
  │  ├─ Tops (Topy)
  │  └─ Pullover (Swetry)
  ├─ Hosen (Spodnie)
  │  ├─ Jeans (Dżinsy)
  │  ├─ Stoffhosen (Spodnie materiałowe)
  │  ├─ Leggings (Legginsy)
  │  └─ Shorts (Szorty)
  ├─ Röcke (Spódnice)
  ├─ Jacken & Mäntel (Kurtki i płaszcze)
  ├─ Sportbekleidung (Odzież sportowa)
  └─ Nachtwäsche (Bielizna nocna)

💼 Accessoires (Akcesoria)
  ├─ Taschen (Torebki)
  ├─ Schmuck (Biżuteria)
  ├─ Schals & Tücher (Szaliki)
  └─ Gürtel (Paski)

⭐ Neue Kollektion (Nowa kolekcja)
🔥 Sale (Wyprzedaż)
ℹ️ Über uns (O nas)
📞 Kontakt
```

## Filtrowanie i sortowanie

- **Größe** (Rozmiar): XS, S, M, L, XL, XXL
- **Farbe** (Kolor): Schwarz, Weiß, Rot, Blau, Grün, etc.
- **Preis** (Cena): €0-€50, €50-€100, €100-€200, €200+
- **Marke** (Marka): integracja z FactoryPrice brands
- **Stil** (Styl): Casual, Business, Sport, Elegant
- **Material** (Materiał): Baumwolle, Polyester, Seide, etc.

---

Teraz przystępuję do generowania PEŁNEJ zawartości wszystkich plików w odpowiedniej kolejności, zaczynając od najwyższego priorytetu.
