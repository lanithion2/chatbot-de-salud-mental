<?php

// Inicializar la variable de caché (puedes usar un sistema más avanzado en producción)
$cache = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se recibió la pregunta del chat
    if (isset($_POST['mensaje'])) {
        // Obtener la pregunta del chat
        $pregunta = $_POST['mensaje'];

        // Verificar si la respuesta está en caché
        if (isset($cache[$pregunta])) {
            // Si está en caché, devolver la respuesta almacenada
            echo $cache[$pregunta];
        } else {
            // Si no está en caché, realizar la solicitud a la API de OpenAI
            $api_key = "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";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $api_key,
            ]);

            $data = [
                'model' => 'gpt-3.5-turbo',
                'messages' => [],
            ];

            $data['messages'][] = ['role' => 'system', 'content' => 'Actua como un experto '];
            $data['messages'][] = ['role' => 'user', 'content' => $pregunta];

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

            $response = curl_exec($ch);
            $decoded_response = json_decode($response, true);

            if (isset($decoded_response['choices'][0]['message']['content'])) {
                $respuesta = $decoded_response['choices'][0]['message']['content'];

                // Almacenar la respuesta en caché para futuras peticiones
                $cache[$pregunta] = $respuesta;

                echo $respuesta;
            }

            curl_close($ch);
        }
    }
}
?>