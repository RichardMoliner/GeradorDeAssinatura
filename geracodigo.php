<?php
$nomee = $_POST['nome'];
$departamentoo = $_POST['departamento'];
$celularr = $_POST['celular'];

$celularr = $_POST['celular'];
$result = sprintf(
    "%s%s",
    substr($celularr, 4, 5),
    substr($celularr, 9, 5)
);

$celularws = str_replace('-', '', $celularr);
$celularwspronto = str_replace('(48) ', '', $celularws)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura pronta</title>
    <link rel="shortcut icon" type="image/png" href="https://s3.amazonaws.com/movidesk-files/3BE38AB04A9092E099FE7AB830509B96">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js" integrity="sha512-iJh0F10blr9SC3d0Ow1ZKHi9kt12NYa+ISlmCdlCdNZzFwjH1JppRTeAnypvUez01HroZhAmP4ro4AvZ/rG0UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    #btn_copy {
        position: absolute;
        left: 5px;
        top: 5px;
        display: none;
    }

    #assinatura:hover+#btn_copy,
    #btn_copy:hover {
        display: block;
    }

    .button.is-success {
        background-color: #48c78e;
        border-color: transparent;
        color: #fff
    }

    .button.is-success.is-hovered,
    .button.is-success:hover {
        background-color: #3ec487;
        border-color: transparent;
        color: #fff
    }

    .button.is-success.is-focused,
    .button.is-success:focus {
        border-color: transparent;
        color: #fff
    }

    .button.is-success.is-focused:not(:active),
    .button.is-success:focus:not(:active) {
        box-shadow: 0 0 0 .125em rgba(72, 199, 142, .25)
    }

    .button.is-success.is-active,
    .button.is-success:active {
        background-color: #3abb81;
        border-color: transparent;
        color: #fff
    }

    .button.is-success[disabled],
    fieldset[disabled] .button.is-success {
        background-color: #48c78e;
        border-color: #48c78e;
        box-shadow: none
    }

    .button.is-success.is-inverted {
        background-color: #fff;
        color: #48c78e
    }

    .button.is-success.is-inverted.is-hovered,
    .button.is-success.is-inverted:hover {
        background-color: #f2f2f2
    }

    .button.is-success.is-inverted[disabled],
    fieldset[disabled] .button.is-success.is-inverted {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #48c78e
    }

    .button.is-success.is-loading::after {
        border-color: transparent transparent #fff #fff !important
    }

    .button.is-success.is-outlined {
        background-color: transparent;
        border-color: #48c78e;
        color: #48c78e
    }

    .button.is-success.is-outlined.is-focused,
    .button.is-success.is-outlined.is-hovered,
    .button.is-success.is-outlined:focus,
    .button.is-success.is-outlined:hover {
        background-color: #48c78e;
        border-color: #48c78e;
        color: #fff
    }

    .button.is-success.is-outlined.is-loading::after {
        border-color: transparent transparent #48c78e #48c78e !important
    }

    .button.is-success.is-outlined.is-loading.is-focused::after,
    .button.is-success.is-outlined.is-loading.is-hovered::after,
    .button.is-success.is-outlined.is-loading:focus::after,
    .button.is-success.is-outlined.is-loading:hover::after {
        border-color: transparent transparent #fff #fff !important
    }

    .button.is-success.is-outlined[disabled],
    fieldset[disabled] .button.is-success.is-outlined {
        background-color: transparent;
        border-color: #48c78e;
        box-shadow: none;
        color: #48c78e
    }

    .button.is-success.is-inverted.is-outlined {
        background-color: transparent;
        border-color: #fff;
        color: #fff
    }

    .button.is-success.is-inverted.is-outlined.is-focused,
    .button.is-success.is-inverted.is-outlined.is-hovered,
    .button.is-success.is-inverted.is-outlined:focus,
    .button.is-success.is-inverted.is-outlined:hover {
        background-color: #fff;
        color: #48c78e
    }

    .button.is-success.is-inverted.is-outlined.is-loading.is-focused::after,
    .button.is-success.is-inverted.is-outlined.is-loading.is-hovered::after,
    .button.is-success.is-inverted.is-outlined.is-loading:focus::after,
    .button.is-success.is-inverted.is-outlined.is-loading:hover::after {
        border-color: transparent transparent #48c78e #48c78e !important
    }

    .button.is-success.is-inverted.is-outlined[disabled],
    fieldset[disabled] .button.is-success.is-inverted.is-outlined {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff
    }

    .button.is-success.is-light {
        background-color: #effaf5;
        color: #257953
    }

    .button.is-success.is-light.is-hovered,
    .button.is-success.is-light:hover {
        background-color: #e6f7ef;
        border-color: transparent;
        color: #257953
    }

    .button.is-success.is-light.is-active,
    .button.is-success.is-light:active {
        background-color: #dcf4e9;
        border-color: transparent;
        color: #257953
    }
</style>

<body>
    <div id="assinatura">
        <table  border="0" cellspacing="0" cellpadding="0" width="570px">
            <tr>
                <td width="5px">
                </td>
                <td width="125px">
                    <img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/sistema-info-simbolo-oficial.png">
                </td>
                <td width="300" style="padding:10px;">
                    <table width="420px" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="15"><span style="font-family: montserrat; font-size:14px; color:#e50914; font-weight:bold;"><?php echo $nomee ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td height="15"><span style="font-family: montserrat; font-size:12px; color:#4d4d4d;"><?php echo $departamentoo ?></span>
                                
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/livro-de-enderecos.png" width="13px" height="13px">
                                <span style="font-family: montserrat; font-size:12px; color:#4d4d4d;">&nbsp;(48) 2101-6770</span>
                        </tr>
                        <tr>
                            <td height="15"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/whatsapp.png" width="13px" height="13px">
                                &nbsp;<a style="font-family: montserrat; font-size:12px; color:#4d4d4d;text-decoration:none" href="<?php echo "https://wa.me/5548" . $celularwspronto ?>" target="blank"><?php echo "(48)" . $result ?></a>
                        </tr>
                        <tr>
                            <td height="15"><span style="font-family: montserrat; font-size:12px;"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/globo.png" width="13px" height="13px"> <a style="text-decoration:none;color:#1c1c1c" href="http://www.sistemainfo.com.br">&nbsp;www.sistemainfo.com.br</a></span>
                            </td>
                        </tr>
                        <table width="120px" cellmargin="0" cellpadding="0" height="25px">
                            <tr>
                                <td height="25px">
                                    <a href="https://link.sistemainfo.com.br/linkedin" target="blank"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/linkedin.jpg" width="20px" height="20px"></a>
                                </td>
                                <td height="25px">
                                    <a href="https://link.sistemainfo.com.br/instagram" target="blank"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/instagram.jpg" width="20px" height="20px"></a>
                                </td>
                                <td height="25px">
                                    <a href="https://link.sistemainfo.com.br/facebook" target="blank"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/facebook.jpg" width="20px" height="20px"></a>
                                </td>
                                <td height="25px">
                                    <a href="https://link.sistemainfo.com.br/youtube" target="blank"><img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/youtube.jpg" width="20px" height="20px"></a>
                                </td>
                            </tr>
                        </table>
                    </table>
                </td>
            </tr>
        </table>
        <span style="font-size:9px;font-family:Open Sans;color:#339966;font-style:italic;">
            <img src="https://sistemainfo.com.br/share/brand-book/extras/assinatura/pzinho-verde.png"> &nbsp; &nbsp;Por favor leve o meio ambiente em considera&ccedil;&atilde;o antes de imprimir este e-mail!
        </span>
    </div>
    <button id="btn_copy" class="button is-success">
        Clique aqui para copiar
    </button>

    <script>
        var clipboard = new Clipboard('#btn_copy', {
            text: function(trigger) {
                return document.getElementById("assinatura").outerHTML;
            }
        });

        clipboard.on('success', function(e) {
            alert('Código copiado para a área de transferência.\n\n1) Abra o Thunderbird\n2) Vá em Ferramentas \n3) Configurações de conta\n4) Marque a opção Usar HTML\n5) Em seguida, aperte CTRL + V no campo abaixo da opção marcada\n\nBe Happy :)');
        });
    </script>
</body>

</html>