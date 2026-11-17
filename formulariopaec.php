<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Compromiso | Eco-Venados</title>
    <style>
        body {
            font-family: "Futura", Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            display: flex;
        }
        aside {
            width: 250px;
            background-color: #111;
            color: white;
            padding: 15px;
            min-height: 100vh;
            box-sizing: border-box;
            position: sticky;
            top: 0;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #444;
            padding-bottom: 15px;
        }
        .logo-wrapper {
            background-color: #ffffff;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .logo-svg {
            width: 80px;
            height: 80px;
            display: block;
        }
        .logo-container h2 {
            font-size: 1rem;
            color: #3b82f6;
            margin: 10px 0 0 0;
        }
        aside h2.menu-title {
            font-size: 1.1rem;
            color: #ffffff;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        aside ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        aside ul li {
            margin-bottom: 10px;
        }
        aside ul li a {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            display: block;
            padding: 4px 0;
        }
        aside ul li a:hover {
            color: #3b82f6;
        }
        main {
            padding: 30px;
            max-width: 650px;
            background-color: white;
            margin: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            flex: 1;
            box-sizing: border-box;
        }
        h1 {
            color: #1d4ed8;
            font-size: 1.8rem;
        }
        .campo {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: "Futura", Arial, sans-serif;
        }
        input[type="submit"] {
            background-color: #1d4ed8;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1rem;
            font-family: "Futura", Arial, sans-serif;
        }
        input[type="submit"]:hover {
            background-color: #1e40af;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            aside {
                width: 100%;
                min-height: auto;
                position: relative;
            }
        }
    </style>
</head>
<body>

    <aside>
        <div class="logo-container">
            <div class="logo-wrapper">
                <!-- Logotipo idéntico al del index (estilo Spooky Month / hojas puntiagudas) -->
                <svg class="logo-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 175 L100 105" stroke="#111111" stroke-width="11" stroke-linecap="round"/>
                    <path d="M100 175 L100 105" stroke="#4ade80" stroke-width="7" stroke-linecap="round"/>

                    <path d="M100 140 Q 70 120 60 135" stroke="#111111" stroke-width="7" stroke-linecap="round" fill="none"/>
                    <path d="M100 140 Q 130 120 140 135" stroke="#111111" stroke-width="7" stroke-linecap="round" fill="none"/>

                    <line x1="93" y1="175" x2="91" y2="195" stroke="#111111" stroke-width="6" stroke-linecap="round"/>
                    <line x1="107" y1="175" x2="109" y2="195" stroke="#111111" stroke-width="6" stroke-linecap="round"/>

                    <path d="M98 115 C 30 110, 5 35, 10 10 C 35 15, 75 60, 98 115 Z" fill="#22c55e" stroke="#111111" stroke-width="6" stroke-linejoin="round"/>
                    <path d="M55 75 L30 50 M65 85 L45 70" stroke="#16a34a" stroke-width="4" stroke-linecap="round"/>

                    <path d="M102 115 C 170 110, 195 35, 190 10 C 165 15, 125 60, 102 115 Z" fill="#4ade80" stroke="#111111" stroke-width="6" stroke-linejoin="round"/>
                    <path d="M145 75 L170 50 M135 85 L155 70" stroke="#22c55e" stroke-width="4" stroke-linecap="round"/>

                    <ellipse cx="84" cy="78" rx="15" ry="18" fill="#ffffff" stroke="#111111" stroke-width="5"/>
                    <circle cx="87" cy="79" r="4" fill="#111111"/>

                    <ellipse cx="116" cy="78" rx="15" ry="18" fill="#ffffff" stroke="#111111" stroke-width="5"/>
                    <circle cx="113" cy="79" r="4" fill="#111111"/>

                    <path d="M90 100 Q 100 114 110 100 Z" fill="#111111" stroke="#111111" stroke-width="2"/>
                </svg>
            </div>
            <h2>Huella Positiva</h2>
        </div>
        <h2 class="menu-title">Menú</h2>
        <ul>
            <li><a href="index.html">← Volver al Inicio</a></li>
        </ul>
    </aside>

    <main>
        <h1>Mi Compromiso con el Reciclaje</h1>
        <form action="resultado.php" method="POST">
            
            <div class="campo">
                <label for="nombre">1. Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="campo">
                <label for="edad">2. Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>

            <div class="campo">
                <label for="grupo">3. Grupo:</label>
                <input type="text" id="grupo" name="grupo" required>
            </div>

            <div class="campo">
                <label for="residuo">4. Residuo generado con más frecuencia:</label>
                <select id="residuo" name="residuo" required>
                    <option value="Plástico">Plástico</option>
                    <option value="Papel / Cartón">Papel / Cartón</option>
                    <option value="Metal / Latas">Metal / Latas</option>
                    <option value="Vidrio">Vidrio</option>
                    <option value="Orgánicos">Orgánicos</option>
                </select>
            </div>

            <div class="campo">
                <label>5. ¿Separas tus residuos?</label><br>
                <input type="radio" name="separacion" value="Sí" required> Sí
                <input type="radio" name="separacion" value="No"> No
                <input type="radio" name="separacion" value="Algunas veces"> Algunas veces
            </div>

            <div class="campo">
                <label for="accion">6. Acciones que realizas para el cuidado ambiental:</label>
                <input type="text" id="accion" name="accion" required>
            </div>

            <div class="campo">
                <label>7. Selecciona tu compromiso:</label><br>
                <input type="checkbox" name="compromisos[]" value="Reducir uso de plástico"> Reducir uso de plástico<br>
                <input type="checkbox" name="compromisos[]" value="Separar residuos en casa"> Separar residuos<br>
                <input type="checkbox" name="compromisos[]" value="Reutilizar materiales escolares"> Reutilizar materiales<br>
                <input type="checkbox" name="compromisos[]" value="Participar en campañas de limpieza"> Participar en campañas<br>
                <input type="checkbox" name="compromisos[]" value="Reciclar aparatos electrónicos"> Reciclar electrónicos
            </div>

            <div class="campo">
                <label for="piezas">8. Reto Didáctico: ¿Cuántas botellas/envases reciclas por semana?</label>
                <input type="number" id="piezas" name="piezas" value="0" min="0" required>
            </div>

            <div class="campo">
                <label for="comentario">9. Comentario o propuesta:</label>
                <textarea id="comentario" name="comentario" rows="3"></textarea>
            </div>

            <input type="submit" value="Enviar Compromiso">
        </form>
    </main>

</body>
</html>
