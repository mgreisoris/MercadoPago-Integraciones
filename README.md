# Generador de links de pago

* [Descripción](#description)
* [Instalación - Paso a paso](#install)

<a name="description"></a>
## Descripción
El generador de links permite a las agencias mayoristas incluir un formulario en su sitio web para generar links de pagos.

A través de este generador, las agencias minoristas pueden de forma autónoma generar los links necesarios y enviarlos a sus clientes finales para que efectúen el pago.

Una vez que la operación se acredite, la misma se verá reflejada en la cuenta de MercadoPago de la agencia mayorista con los datos ingresados por la agencia minorista.

<a name="install"></a>
## Instalación - Paso a paso

1. Descargar este repositorio.

2. Obtener las credenciales de la cuenta de MP de la agencia mayorista. Las mismas se encuentran en la pestaña "Checkout básico": **CLIENT_ID** y **CLIENT_SECRET**.
    * Argentina: [https://www.mercadopago.com/mla/account/credentials](https://www.mercadopago.com/mla/account/credentials)
    * México: [https://www.mercadopago.com/mlm/account/credentials](https://www.mercadopago.com/mlm/account/credentials)
    * Brasil: [https://www.mercadopago.com/mlb/account/credentials](https://www.mercadopago.com/mlb/account/credentials)
    * Colombia: [https://www.mercadopago.com/mco/account/credentials](https://www.mercadopago.com/mco/account/credentials)
    * Chile: [https://www.mercadopago.com/mlc/account/credentials](https://www.mercadopago.com/mlc/account/credentials)
    * Venezuela: [https://www.mercadopago.com/mlv/account/credentials](https://www.mercadopago.com/mlv/account/credentials)
    

3. Reemplaza las credenciales de la cuenta de MP en el archivo `create_preference.php` que descargaste.

```php
require_once ('mercadopago.php');

$mp = new MP ("CLIENT_ID", "CLIENT_SECRET");
```

4. Copia los archivos `lib/mercadopago.php`, `index.html` y `create_preference.php` en tu servidor.
