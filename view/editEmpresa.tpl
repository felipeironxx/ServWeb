{include file="view/head_win.tpl"}

<h3>Ediçao de Empresas</h3>

<form name="edit" id="edit" method="post" enctype="multipart/form-data">

    Nome:                         <input type="text" name="nEmpresa" id="nEmpresa" size="40" value="{$e.nEmpresa}"><br>
    CNPJ:                         <input type="text" name="cnpj" id="cnpj" size="16" value="{$e.cnpj}" maxlength="18" onblur="validaCNPJ();" onkeypress="formataCNPJ(document.cad.cnpj);">
    Inscriçao Estadual:           <input type="text" name="ie" id="ie" size="18" value="{$e.ie}"><br>
    Nome do Aplicativo PAF-ECF:   <input type="text" name="nAplicativo" id="nAplicativo" size="40" value="{$e.nAplicativo}"><br>
    Serial do Aplicativo PAF-ECF: <input type="text" name="serial_ap" id="serial_ap" size="40" value="{$e.serial_ap}"><br>
    Rua:                          <input type="text" name="ruaE" id="ruaE" size="40" value="{$e.ruaE}">
    Numero:                       <input type="text" name="numE" id="numE" size="10" value="{$e.numE}"><br>
    Bairro:                       <input type="text" name="bairroE" id="bairroE" size="40" value="{$e.bairroE}"><br>
    Cidade:                       <input type="text" name="cidadeE" id="cidadeE" size="40" value="{$e.cidadeE}"><br>
    Telefone:                     <input type="text" name="telE" id="telE" size="13" value="{$e.telE}">
    E-mail:                       <input type="text" name="emailE" id="emailE" size="40" value="{$e.emailE}"><br>
    Contador:                     <input type="text" name="contador" id="contador" size="20" value="{$e.contador}">
    Telefone do Contador:         <input type="text" name="tel_contador" id="tel_contador" size="13" value="{$e.tel_contador}"><br><br>

    <div id="btn">
        <input type="submit" value="Salvar"/>
    </div>
</form>


{include file="view/footer_win.tpl"}
