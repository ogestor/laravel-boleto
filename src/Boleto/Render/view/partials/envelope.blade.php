<table class="table-boleto" cellpadding="0" cellspacing="0" border="0">
    <tbody>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope" style="padding-bottom: 20px !important; ">
            <img src="{{ isset($logo_banco_base64) && !empty($logo_banco_base64) ? $logo_banco_base64 : 'https://dummyimage.com/150x75/fff/000000.jpg&text=+' }}"
                 alt="logo do banco">
        </td>
    </tr>
    <tr>
        <td style="background: #7777; text-align: center; border: 1px solid black; padding: 5px;">
            <strong>{{ $beneficiario['nome_documento'] }}</strong>
        </td>
    </tr>
    <tr>
        <td class="noborder p-envelope">
            <strong>Destinat&aacute;rio:</strong> {{ $pagador['nome_documento'] }}<br/>
            <strong>Endere&ccedil;o:</strong> {{ $pagador['endereco'] }}<br/>
            <strong>CEP:</strong> {{ $pagador['endereco2'] }}
        </td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noleftborder norightborder notopborder bottomborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noleftborder norightborder notopborder bottomborder p-envelope"><h4>{{ $beneficiario['nome'] }}</h4></td>
    </tr>
    <tr>
        <td class="noborder p-envelope">
            <strong>Remetente:</strong> {{ $beneficiario['nome'] }} <br />
            <strong>Endere&ccedil;o:</strong> {{ $beneficiario['endereco'] }} </td>
            {{ $beneficiario['endereco2'] }}
        </td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">&nbsp;</td>
    </tr>
    <tr>
        <td class="noborder p-envelope">
            <img src="{{ $rodape_envelope }}" style="width: 680px;">
        </td>
    </tr>
    </tbody>
</table>
