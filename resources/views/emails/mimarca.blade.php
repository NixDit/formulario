<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva solicitud – IMAQ</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
    <tr>
        <td align="center">

```
        <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:6px; overflow:hidden;">

            <!-- HEADER -->
            <tr>
                <td style="background-color:#1f3c88; padding:20px; text-align:center;">
                    <img src="{{ asset('img/logo-imaq.png') }}"
                         alt="IMAQ"
                         style="max-width:180px; display:block; margin:0 auto;">
                </td>
            </tr>

            <!-- TÍTULO -->
            <tr>
                <td style="padding:20px 25px 10px;">
                    <h2 style="margin:0; color:#1f3c88; font-size:18px;">
                        Nueva solicitud de asesoría y cotización
                    </h2>
                    <div style="width:60px; height:3px; background-color:#e11d2a; margin-top:6px;"></div>
                </td>
            </tr>

            <!-- CONTENIDO -->
            <tr>
                <td style="padding:15px 25px; color:#333333; font-size:14px; line-height:1.6;">

                    <p>
                        Se ha recibido una nueva solicitud desde el formulario
                        <strong>“Crear tu propia marca de cosméticos”</strong>.
                    </p>

                    <!-- DATOS -->
                    <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
                        <tr>
                            <td width="35%"><strong>Nombre:</strong></td>
                            <td>{{ $data->name }} {{ $data->last_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>Teléfono:</strong></td>
                            <td>{{ $data->phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Servicio:</strong></td>
                            <td>{{ $data->service_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Línea:</strong></td>
                            <td>{{ $data->line_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Cantidad:</strong></td>
                            <td>{{ $data->quantity }}</td>
                        </tr>
                        <tr>
                            <td><strong>Horario:</strong></td>
                            <td>{{ $data->hour_text }}</td>
                        </tr>
                        <tr>
                            <td><strong>Estado:</strong></td>
                            <td>{{ $data->state_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Ciudad:</strong></td>
                            <td>{{ $data->form_city }}</td>
                        </tr>
                    </table>

                    <!-- MENSAJE -->
                    <div style="margin-top:20px; padding:15px; background-color:#f9fafb; border-left:4px solid #e11d2a;">
                        <strong>Mensaje del cliente:</strong>
                        <p style="margin:8px 0 0;">
                            {{ $data->message }}
                        </p>
                    </div>

                </td>
            </tr>

            <!-- FOOTER -->
            <tr>
                <td style="background-color:#f4f6f8; padding:15px; text-align:center; font-size:12px; color:#666;">
                    <p style="margin:0;">
                        © {{ date('Y') }} Industrial Maquiladora OCS S.A. de C.V.<br>
                        <strong>www.industrialmaquiladora.com</strong>
                    </p>
                </td>
            </tr>

        </table>

    </td>
</tr>
```

</table>

</body>
</html>
