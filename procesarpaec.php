<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compromiso | Eco-Venados</title>
    <style>
        body {
            font-family: 'Futura', Arial, sans-serif;
            background-color: #ffffff;
            color: #111827;
            margin: 0;
            display: flex;
        }
        aside {
            width: 260px;
            background-color: #111827;
            color: #ffffff;
            padding: 20px;
            height: 100vh;
            box-sizing: border-box;
            position: fixed;
        }
        aside h2 { font-size: 1.2rem; border-bottom: 2px solid #1d4ed8; padding-bottom: 8px; }
        aside ul { list-style: none; padding: 0; }
        aside ul li { margin-bottom: 12px; }
        aside ul li a { color: #ffffff; text-decoration: none; display: block; padding: 6px; }
        aside ul li a:hover { background-color: #1d4ed8; border-radius: 4px; }
        main {
            margin-left: 260px;
            padding: 40px;
            max-width: 700px;
            width: 100%;
        }
        h1 { color: #1d4ed8; }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group, .checkbox-group {
            margin-top: 5px;
        }
        .radio-group label, .checkbox-group label {
            font-weight: normal;
            display: inline-block;
            margin-right: 15px;
        }
        button {
            background-color: #1d4ed8;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background-color: #1e40af; }
    </style>
</head>
<body>

    <aside>
        <h2>Eco-Venados</h2>
        <ul>
            <li><a href="index.html">Página Principal</a></li>
            <li><a href="formulario.php">Mi Compromiso</a></li>
        </ul>
    </aside>

    <main>
        <h1>Formulario: Mi Compromiso con el Reciclaje</h1>
        <p>Completa este formulario para calcular tu impacto positivo y registrar tu compromiso ambiental.</p>

        <form action="resultado.php" method="POST">
            
            <div class="form-group">
                <label for="nombre">1. Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="edad">2. Edad:</label>
                <input type="number" id="edad" name="edad" min="1" required>
            </div>

            <div class="form-group">
                <label for="grupo">3. Grupo / Grado:</label>
                <input type="text" id="grupo" name="grupo" required>
            </div>

            <div class="form-group">
                <label for="residuo">4. Residuo que generas con mayor frecuencia:</label>
                <select id="residuo" name="residuo" required>
                    <option value="Plástico (PET / Envases)">Plástico (PET / Envases)</option>
                    <option value="Papel y Cartón">Papel y Cartón</option>
                    <option value="Latas y Metal">Latas y Metal</option>
                    <option value="Vidrio">Vidrio</option>
                    <option value="Residuos Orgánicos">Residuos Orgánicos</option>
                </select>
            </div>

            <div class="form-group">
                <label>5. ¿Separas tus residuos actualmente?</label>
                <div class="radio-group">
                    <label><input type="radio" name="separacion" value="Sí" required> Sí</label>
                    <label><input type="radio" name="separacion" value="No"> No</label>
                    <label><input type="radio" name="separacion" value="Algunas veces"> Algunas veces</label>
                </div>
            </div>

            <div class="form-group">
                <label for="accion">6. ¿Qué acción realizas para cuidar el medio ambiente?</label>
                <input type="text" id="accion" name="accion" placeholder="Ej. Llevo mi propia botella de agua reusable" required>
            </div>

            <div class="form-group">
                <label>7. Selecciona tu compromiso ambiental:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="compromisos[]" value="Reducir el uso de plástico de un solo uso"> Reducir uso de plástico</label><br>
                    <label><input type="checkbox" name="compromisos[]" value="Separar correctamente los residuos en casa y escuela"> Separar residuos</label><br>
                    <label><input type="checkbox" name="compromisos[]" value="Reutilizar materiales escolares o envoltorios"> Reutilizar materiales</label><br>
                    <label><input type="checkbox" name="compromisos[]" value="Participar en campañas de limpieza o reciclaje"> Participar en campañas</label><br>
                    <label><input type="checkbox" name="compromisos[]" value="Reciclar aparatos electrónicos en puntos limpios"> Reciclar aparatos electrónicos</label>
                </div>
            </div>

            <div class="form-group">
                <label for="reto_piezas">8. Reto Didáctico: ¿Cuántos envases o botellas plásticas reciclas a la semana aproximadamente?</label>
                <input type="number" id="reto_piezas" name="reto_piezas" min="0" value="0" required>
            </div>

            <div class="form-group">
                <label for="comentario">9. Comentario o Propuesta de Mejora:</label>
                <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu idea para mejorar el reciclaje en el plantel..."></textarea>
            </div>

            <button type="submit">Enviar Compromiso</button>
        </form>
    </main>

</body>
</html>