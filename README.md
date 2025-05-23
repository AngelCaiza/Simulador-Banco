# Simulador de Banco - Tablas de Amortización

Este proyecto es un simulador bancario desarrollado para calcular y visualizar tablas de amortización. Está diseñado para ayudar a los usuarios a entender cómo se distribuyen sus pagos en créditos o préstamos, mostrando detalles como cuota fija, capital amortizado, intereses y saldo pendiente en cada periodo.

El frontend fue desarrollado utilizando **Angular**, ofreciendo una interfaz moderna, dinámica y responsiva para la simulación.

---

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

---

### Pre-requisitos 📋

- Node.js y Angular CLI instalados  
- Navegador web moderno  
- Servidor local como XAMPP/WAMP si se conecta a backend (PHP)  
- MySQL si se guarda historial de simulaciones

---

### Instalación 🔧

1. Clona el repositorio:

    git clone 

2. Entra al directorio del frontend y ejecuta:

    cd frontend  
    npm install

3. Inicia la aplicación Angular:

    ng serve

4. Accede a la aplicación en:

    http://localhost:4200/

5. Apis en php:
   - Coloca los archivos del backend en `htdocs`.
   - Configura `config.php` con los datos de conexión a la base de datos.
   - Importa la base de datos con el archivo `.sql`.

---

## Uso básico 🖥️

- Ingresa los datos del préstamo (monto, tasa de interés, plazo, tipo de sistema).
- Selecciona el sistema de amortización: **Francés**, **Alemán**, etc.
- Visualiza la tabla de amortización generada:
  - Número de cuota  
  - Valor de la cuota  
  - Interés pagado  
  - Capital amortizado  
  - Saldo restante  

---

## Funcionalidades principales ✨

- Cálculo automático de cuotas según sistema de amortización seleccionado  
- Generación y visualización de tabla de amortización  
- Interfaz moderna y responsiva desarrollada con Angular  
- Exportación o impresión de tablas  
- Registro de simulaciones si se usa backend con base de datos

---

## Tecnologías usadas 🛠️

- **Angular** – Framework moderno de frontend  
- **TypeScript** – Lenguaje de programación del frontend  
- **HTML5** – Estructura  
- **CSS3** – Estilos  
- **JavaScript** – Interacciones  
-  **PHP** – Backend para procesamiento  
- **MySQL** – Almacenamiento de simulaciones  

---

## Contribuyendo 🖇️

Por favor, lee el archivo [CONTRIBUTING.md](CONTRIBUTING.md) para conocer el código de conducta y cómo proponer mejoras.

---

## Autores ✒️

* **Colaborador(a)** - [Angel Caiza](#nombreusuario)
* **Colaborador(a)** - [Alexis Poaquiza](#nombreusuario)
* **Colaborador(a)** - [Mauricio Villafuerte](#nombreusuario)

---

## Licencia 📄

Este proyecto está bajo la Licencia MIT - consulta el archivo [LICENSE.md](LICENSE.md) para más detalles.
