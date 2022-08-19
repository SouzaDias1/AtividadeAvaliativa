<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>

<body>

<h1><center><b>CLIENTE</b></center></h1>

    <form action="/pagina-processa-dados-do-form" method="post">
        <div>
            <label for="Nome">Nome:</label>
            <input type="text" id="nome" />
        </div>

        <div>
            <label for="Data de Nascimento">Data de Nascimento:</label>
            <input type="date" id="Data de Nascimento" />
        </div>

        <div>
            <label for="Estado Civil">Estado Civil:</label>
            <select Estado Civil = "select">
                <option value="Casado">Casado</option>
                <option value="Solteiro" >Solteiro</option>
                <option value="viúvo">Viúvo</option>
                <option value="Divorciado">Divorciado</option>
                <option value="União Estavel">União Estavel</option>
            </select>
        </div>

        <div>
            <label for="Endereço">Endereço:</label>
            <input type="text" id="Endereço"/>
        </div>

        <div>
            <label for="Número">Número:</label>
            <input type="int" id="Número" />
        </div>

        <div>
            <label for="Complemento">Complemento:</label>
            <input type="text" id="Complemento" />
        </div>

        <div>
            <label for="CEP">CEP:</label>
            <input type="text" id="CEP" />
        </div>

        <div>
            <label for="Telefone">Telefone:</label>
            <input type="text" id="Telefone">
        </div>

        <div>
            <label for="Estado">Estado:</label>
                <select>
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
            </select>
        </div>
        
        <div>
            <label for="RG">RG:</label>
            <input type="text" id="telefone">
        </div>

    </form>   

</body>

</html>