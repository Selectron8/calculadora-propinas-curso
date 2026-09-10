# Calculadora de Propinas - Proyecto de Práctica

Este repositorio contiene el código fuente de una **Calculadora de Propinas**, desarrollada como proyecto de práctica para el cálculo de propinas y la validación de datos en formularios web.

> ⚠️ **IMPORTANTE:** Para el correcto funcionamiento de la aplicación y evitar problemas con la carga de recursos o restricciones de seguridad del navegador, **es necesario ejecutar este proyecto en un servidor local (`localhost`)** y no abriendo directamente el archivo `.html` desde el sistema de archivos.

---

## 💡 Funcionamiento de la Aplicación

La aplicación permite calcular el importe de la propina y el total a pagar a partir de los datos introducidos por el usuario:

1. **Ingreso del monto de la cuenta:** El usuario introduce el importe total del consumo.
2. **Ingreso del porcentaje personalizado:** Se especifica el porcentaje de propina que se desea aplicar.
3. **Cálculo de importes:** La herramienta procesa los valores ingresados para mostrar el desglose correspondiente.
4. **Gestión de errores y validación del formulario:** 
   - Se realiza una comprobación de los datos introducidos en el formulario antes de procesar la información.
   - En caso de detectar errores (campos vacíos, valores inválidos o datos no permitidos), la interfaz gestiona y muestra los mensajes de error correspondientes para indicar qué campo requiere corrección.

## Estructura del proyecto

calculadora-propinas-curso/
├── css/
├── php/
├── index.html
└── README.md
---

## 🚀 Cómo ejecutar el proyecto en `localhost`

Puedes desplegar un servidor local utilizando cualquiera de las siguientes opciones:

### Opción 1: Extensión *Live Server* en VS Code (Recomendada)
1. Abre la carpeta del proyecto en **Visual Studio Code**.
2. Instala la extensión **Live Server** (creada por *Ritwick Dey*).
3. Haz clic derecho sobre tu archivo HTML principal (por ejemplo, `index.html`).
4. Selecciona **"Open with Live Server"**.
5. Se abrirá automáticamente tu navegador en `http://127.0.0.1:5500` o `http://localhost:5500`.

---

### Opción 2: Usando Python
Si dispones de Python en tu sistema:

1. Abre la terminal o consola de comandos.
2. Accede al directorio del proyecto:
   ```bash
   cd /ruta/hacia/calculadora-propinas-curso
