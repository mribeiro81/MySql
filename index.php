<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>MySql - DDL e DML</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/stylo.css" type="text/css" rel="stylesheet" /> 
</head>
<body>

	<header class="container header-background mt-1">

	    <div class="row justify-content-md-center">

	        <div class="col-sm">
	            <h2>Trabalhando com MySql</h2>
	            <ul>
	            	<li>DDL(Data Definition Language)</li>
	            	<li>DML(Data Manipulation Language)</li>
	            </ul>         
	        </div>

	    </div>

	</header>

	<main role="main" class="container mt-2">	

		<div class="row"> 
			<div class="col-sm">	
				<h3 class="mt-4">O objetivo desse tutorial é mostrar de forma objetiva os comandos DDL e DML MySql.</h3>
			</div>	
		</div>					

		<div class="accordion mt-4 pb-4" id="mysql">

			<div class="card">
			    <div class="card-header" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link" id="ddl" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Comandos DDL(Data Definition Language)
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#mysql">
					<div class="card-body">

						<h4>Os comandos DDL servem para definir a estrutura dos dados e tabelas. Os principais comandos para definição de dados são:</h4>
						<ul>
							<li>CREATE</li>
							<li>ALTER</li>
							<li>DROP</li>
							<li>RENAME</li>
							<li>TRUNCATE</li>
						</ul>

						<h4 class="mt-4">CREATE: Comando para criar banco de dados(CREATE db) e tabelas(CREATE table)</h4>						
								
						<ul class="mt-3">
							<li>Síntaxe para criar banco de dados: CREATE DATABASE &lt;nome-do-banco>;</li>
							<li>Criando o banco de dados cliente: CREATE DATABASE cliente;</li>
						</ul>
						<ul class="mt-3">
							<li>Síntaxe para criar banco tabela: CREATE &lt;table nome-da-tabela> &ltdefinição da tabela> &lt;type - opcional>;</li>
							<li>Criando a tabela cliente no banco de dados cliente:<br>
<pre>

Utilizando o banco de dados cliente
use cliente; 

Criando a tabela cliente
CREATE TABLE `cliente` (
  `Id_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `Nome_cliente` varchar(50) NOT NULL,
  `Email_cliente` varchar(60) NOT NULL,
  `Cel_cliente` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</pre>	
							</li>
						</ul>	


						<h4 class="mt-4">ALTER TABLE: O comando ALTER possibilita alterar a estrutura de uma tabela após ter sido criada. É possível adicionar, excluir ou modificar colunas de uma tabela.</h4>
						<h5>Várias são as situações em que pode ser necessário alterar uma tabela. Aqui vou mostrar alguns exemplos:</h5>
						<ul>
							<li>1. ADD - Adicionar coluna na tabela: ALTER TABLE cliente ADD  `Genero_cliente` set('F','M') NOT NULL;</li>
							<li>2. MODIFY - Modificar coluna de uma tabela:  ALTER TABLE cliente MODIFY Email_cliente varchar(70) NOT NULL;</li>
							<li>3. DROP - Utilizando drop para excluir coluna de uma tabela: ALTER TABLE cliente DROP Genero_cliente;</li>
						</ul>


						<h4 class="mt-4">DROP: Comando para exclusão de dados.</h4>
						<h5>O comando DROP pode ser utilizado de forma individual ou junto com o comando ALTER TABLE. Aqui, vou mostrar exemplos de utilização individual do comando DROP.</h5>
						<ul>
							<li>1. DROP TABLE - Excluir tabela: DROP TABLE &lt;nome-da-tabela>;</li>
							<li>2. DROP DATABASE - Excluir banco de dados: DROP DATABASE &lt;nome-do-banco>;</li>
						</ul>	

							
						<h4 class="mt-4">RENAME: Comando para renomear tabelas.</h4>
						<ul>
							<li>Renomeando a tabela cliente para pessoa: RENAME TABLE cliente to pessoa;</li>
						</ul>


						<h4 class="mt-4">RENAME: Comando para renomear tabela.</h4>
						<ul>
							<li>Renomeando a tabela cliente para pessoa: RENAME TABLE cliente to pessoa;</li>
						</ul>


						<h4 class="mt-4">TRUNCATE: Comando para excluir conteúdo da tabela. Exclui somente os dados e não a tabela.</h4>
						<ul>
							<li>Excluindo os dados da tabela pessoa: TRUNCATE TABLE pessoa;</li>
						</ul>	

					</div>	
				</div>
			</div>	



		<div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Comandos DML(Data Manipulation Language)
		        </button>
		      </h5>
		    </div>				

			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#mysql">
  				<div class="card-body">

					<h4 class="mt-4">Os comandos DML são utilizados para realizar consultas, inclusões, exclusões e alteração de dados.</h4>
					<h5>Os comandos DML são:</h5>
					<ul>
						<li>INSERT</li>
						<li>SELECT</li>					
						<li>UPDATE</li>
						<li>DELETE</li>
					</ul>

					<p>
						Antes de mostrar exemplos de utilização dos comandos DML, vou falar sobre claúsulas e operadores, que são utilizados em conjunto com esses comandos.
					</p>

					<h5 class="mt-4">FROM: A cláusula FROM é utilizada para indicar as tabelas que serão utilizadas nos comandos SELECT e DELETE. </h5>

					<h5 class="mt-4">WHERE: A cláusula WHERE é utilizada com os comandos select,  update e delete. Utilizado em conjunto com operadores, realiza um filtro, possibilitando trazer os dados de acordo com as condições definidas. </h5>

					<p>Confira a lista de operadores que são utilizados junto com a cláusula WHERE:</p>

					<ul>
						<li>= Igual a</li>
						<li>> Maior que</li>
						<li>>= Maior ou igual que</li>
						<li>< Menor que</li>
						<li><= Menor ou igual que</li>
						<li><> Diferente de</li>
						<li>AND - Mostra um registro se ambas as condições forem verdadeiras.</li>	
						<li>OR - Mostra um registro se pelo menos uma das condições for verdadeira.</li>
						<li>NOT - Esse operador é a negação de uma expressão - inverte o seu estado lógico.</li>
						<li>IN -  Serve para verificar se o valor de uma coluna está presente em uma lista de elementos. O operador IN pode ser utilizado no lugar do operador OR em determinadas situações.</li>
						<li>NOT IN - Aqui é a junção do operador NOT e do operador IN. Ao contrário de IN, permite obter como resultado o valor de uma coluna que não pertence a uma determinada lista de elementos.</li>
						<li>BETWEEN - Possibilita a consulta de uma determinada faixa de valores.</li>
						<li>NOT BETWEEN - Ao contrário de BETWEEN, possibilita consultar valores que não se encontram em uma determinada faixa.</li>
						<li>LIKE - É utilizado para buscar por uma determinada string dentro de colunas em formato caractere(texto).</li>
						<li>NOT LIKE - Ao contrário de LIKE, é utilizado para entrontrar registros que não contenham uma determinada string.</li>
					</ul>


					<h5 class="mt-4">GROUP BY: Essa cláusula permite agrupar registros em subgrupos com base em colunas ou valores retornados por uma expressão.</h5>
					<p>Ao utilizar a cláusula GROUP BY, é comum utilizar funções de agregação para para realizar cálculos sobre os valores retornados. Segue abaixo uma lista de funções de agregação comumente utilizadas com GROUP BY.</p>
					<ul>
						<li>MIN - Valor Mínimo de um conjunto de valores</li>
						<li>MAX - Valor Máximo de um conjunto de valores</li>
						<li>AVG - Média Aritmética de um conjunto de valores. Aceita como entrada um conjunto de números.</li>
						<li>SUM - Total (Soma) de um conjunto de valores. Aceita como entrada um conjunto de números.</li>
						<li>COUNT - Contar quantidade total de itens</li>	
					</ul>

					<h5 class="mt-4">HAVING: É utilizado em conjunto com a cláusula GROUP BY, para filtrar as colunas agrupadas. A cláusula HAVING pode ser entendida como o WHERE do GROUP BY.</h5>	


					<h5 class="mt-4">ORDER BY: A cláusula ORDER BY é utilizada em conjunto com o comando SELECT. Permite ordenar o resultado de uma consulta.</h5>
					<ul>
						<li>ORDER BY ASC - Ordena o resultado da consulta de forma ascendente - do menor para o maior.</li>
						<li>ORDER BY DESC - Ordena o resultado da consulta de forma descendente - do maior para o menor.</li>
					</ul>

					<h5 class="mt-4">LIMIT: Essa cláusula pode ser utilizada em comandos SELECT, UPDATE e DELETE.</h5>
					<p>No comando SELECT, serve para determinar a quantidade e a faixa de registros a serem retornados como resultado de uma consulta.<br>Quando utilizado em conjunto com os comandos UPDATE e DELETE, serve para determinar a quantidade de registros a serem afetados pelos comandos.</p>



					<h5 class="mt-4">
						Para dar exemplos utilizando os comandos DML, vou criar um banco de dados chamado teste com as seguintes tabelas: funcionario, consultor, empregado, cargo, dependente e pedido. 
					</h5>
					<p>As três primeiras tabelas(funcionario, consultor e empregado), armazenam dados de funcionários. Criei essas 3 tabelas propositalmente para melhor ilustrar alguns exemplos que mostrarei adiante.</p>

<pre>

Código para criar o banco de dados teste
CREATE DATABASE teste;
</pre>		


<pre>
Código para utilizar o banco de dados teste	
use teste;
</pre>		

<pre>
Código para criar a tabela funcionário
CREATE TABLE `funcionario` (
`Id_funcionario` int(3) NOT NULL AUTO_INCREMENT,
`Id_cargo` int(1) NOT NULL,
`Nome_funcionario` varchar(60) NOT NULL,
`Salario_funcionario` double(10,2) NOT NULL,
PRIMARY KEY (`Id_funcionario`),
KEY `fk_id_cargo` (`Id_cargo`),
CONSTRAINT `fk_id_cargo` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
</pre>	

<pre>
Código para criar a tabela consultor
CREATE TABLE `consultor` (
`Id_consultor` int(2) NOT NULL AUTO_INCREMENT,
`Id_cargo` int(1) NOT NULL,
`Nome_consultor` varchar(60) NOT NULL,
`Salario_consultor` double(10,2) NOT NULL,
PRIMARY KEY (`Id_consultor`),
KEY `fk_cargo` (`Id_cargo`),
CONSTRAINT `fk_cargo` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id_cargo`)
);
</pre>	

<pre>
Código para criar a tabela empregado
CREATE TABLE `empregado` (
`Id_empregado` int(2) NOT NULL AUTO_INCREMENT,
`Id_cargo` int(1) NOT NULL,
`Nome_empregado` varchar(50) NOT NULL,
`Data_nascimento` date DEFAULT NULL,
PRIMARY KEY (`Id_empregado`),
KEY `fk1_id_cargo` (`Id_cargo`),
CONSTRAINT `fk1_id_cargo` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id_cargo`)
);
</pre>	
		
<pre>
Código para criar a tabela cargo
CREATE TABLE `cargo` (
`Id_cargo` int(1) NOT NULL AUTO_INCREMENT,
`Nome_cargo` varchar(50) NOT NULL,
PRIMARY KEY (`Id_cargo`),
UNIQUE KEY `Nome_cargo` (`Nome_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
</pre>				

<pre>
Código para criar a tabela dependente
CREATE TABLE `dependente` (
`Id_dependente` int(5) NOT NULL AUTO_INCREMENT,
`Id_funcionario` int(3) NOT NULL,
`Nome_depentente` varchar(50) NOT NULL,
PRIMARY KEY (`Id_dependente`),
KEY `fk_funcionario` (`Id_funcionario`),
CONSTRAINT `fk_funcionario` FOREIGN KEY (`Id_funcionario`) REFERENCES `funcionario` (`Id_funcionario`)
);
</pre>

<pre>
CREATE TABLE `pedido` (
`Id_pedido` int(10) NOT NULL AUTO_INCREMENT,
`Id_funcionario` int(3) NOT NULL,
`Data_pedido` date NOT NULL,
`Valor_pedido` double(10,2) NOT NULL,
PRIMARY KEY (`Id_pedido`),
KEY `fk2_id_funcionario` (`Id_funcionario`),
CONSTRAINT `fk2_id_funcionario` FOREIGN KEY (`Id_funcionario`) REFERENCES `funcionario` (`Id_funcionario`)
);
</pre>

				</div>
			</div>
	</div>	



	<div class="card">
	    <div class="card-header" id="headingThree">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" id="insert" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	           INSERT: O comando INSERT é utilizado para inserir registros em tabelas.
	        </button>
	      </h5>
	    </div>
	    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#mysql">
		    <div class="card-body">
		       
				<p>Veja os tipos de inserção de dados em uma tabela.</p>
				<ul>
					<li class="mt-3">
						INSERT POSICIONAL: O insert posicional permite inserir dados em uma tabela de acordo com a ordem física que ela possui.<br>
						Utilizando como exemplo a tabela funcionário que tem as seguintes colunas: Id_funcionario, Nome_funcionario e Salario_funcioario.<br>
						Exemplo de insert posicional:<br> 
						INSERT funcionario VALUES(4,5,"Alexandre Silva","100.00");
					</li>
					<li class="mt-3">
						INSERT DECLARATIVO: Esse tipo de insert permite escolher a ordem em que os dados serão inseridos na tabela.<br />
						Para esse exemplo, utilizarei novamente a tabela funcionario.<br>
						Exemplo de insert declarativo - note que os dados serão inseridos em uma ordem diferente da ordem física da tabela:<br>
						INSERT INTO funcionario ( Nome_funcionario, Id_funcionario, Id_cargo, Salario_funcionario) VALUES("Margarida de Souza", 5, 3, "120.00");
					</li>
					<li class="mt-3">
						INSERT COM SELECT - quando as tabelas têm estruturas iguais.<br>
						Exemplo:<br>
						INSERT INTO consultor SELECT * from funcionario;
					</li>
					<li class="mt-3">
						INSERT COM SELECT - quando as tabelas têm estruturas diferentes.<br>
						Note que na tabela empregado tem a coluna Data_nascimento que não há na tabela funcionario. Em razão disso, no comando SELECT feito a tabela funcionário, o valor null está na posição em que a coluna Data_nascimento está na tabela empregado:<br>	
<pre>
INSERT INTO empregado 
SELECT 
	Id_funcionario,
	Id_cargo,
	Nome_funcionario,
	null
from funcionario;
</pre>
						</li>					
					</ul>


					<p>Para realizar os próximos comandos DML, vou popular as tabelas cargo, funcionario, consultor, dependente e pedido.</p>
					
					<p>Tabela cargo</p>
					<table class="table table-sm table-striped table-dark table-bordered table-hover">
						<thead class="thead-dark">
							<tr>							
								<th>Id_cargo</th>
								<th>Nome_cargo</th>							
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>PRESIDENTE</td>							
							</tr>
							<tr>
								<td>2</td>
								<td>Gerente</td>							
							</tr>
							<tr>
								<td>3</td>
								<td>Supervisor</td>							
							</tr>
							<tr>
								<td>4</td>
								<td>Revisor</td>							
							</tr>
							<tr>
								<td>5</td>
								<td>Redator</td>							
							</tr>
						</tbody>
					</table>

					<p>Tabela funcionario</p>
					<table class="table table-sm table-striped table-dark table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Id_funcionario</th>
								<th>Id_cargo</th>
								<th>Nome_funcionario</th>
								<th>Salario_funcionario</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>5</td>
								<td>Manoel Ribeiro</td>
								<td>100</td>
							</tr>
							<tr>
								<td>2</td>
								<td>1</td>
								<td>Daniella Vasconcellos</td>
								<td>500</td>
							</tr>
							<tr>
								<td>3</td>
								<td>2</td>
								<td>Marisa Estácio</td>
								<td>125</td>
							</tr>
							<tr>
								<td>4</td>
								<td>5</td>
								<td>Alexandre Silva</td>
								<td>100</td>
							</tr>
							<tr>
								<td>5</td>
								<td>3</td>
								<td>Margarida de Souza</td>
								<td>120</td>
							</tr>
							<tr>
								<td>6</td>
								<td>3</td>
								<td>Alexandre Silva</td>
								<td>120</td>
							</tr>													
						</tbody>
					</table>


					<p>Tabela consultor.<br> 
					Obs.: Essa tabela possui os mesmos dados da tabela funcionario. A mesma foi populada com o INSERT COM SELECT - quando as tabelas têm estruturas iguais. </p>
					<table class="table table-sm table-striped table-dark table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Id_consultor</th>
								<th>Id_cargo</th>
								<th>Nome_consultor</th>
								<th>Salario_consultor</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>5</td>
								<td>Manoel Ribeiro</td>
								<td>100</td>
							</tr>
							<tr>
								<td>2</td>
								<td>1</td>
								<td>Daniella Vasconcellos</td>
								<td>500</td>
							</tr>
							<tr>
								<td>3</td>
								<td>2</td>
								<td>Marisa Estácio</td>
								<td>125</td>
							</tr>
							<tr>
								<td>4</td>
								<td>5</td>
								<td>Alexandre Silva</td>
								<td>100</td>
							</tr>
							<tr>
								<td>5</td>
								<td>3</td>
								<td>Margarida de Souza</td>
								<td>120</td>
							</tr>
							<tr>
								<td>6</td>
								<td>3</td>
								<td>Alexandre Silva</td>
								<td>120</td>
							</tr>													
						</tbody>
					</table>


					<p>Tabela dependente</p>
					<table class="table table-sm table-striped table-dark table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Id_dependente</th>
								<th>Id_funcionario</th>
								<th>Nome_dependente</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>3</td>
								<td>Rodrigo Estácio</td>
							</tr>
							<tr>
								<td>1</td>
								<td>3</td>
								<td>Jomário Estácio</td>
							</tr>
							<tr>
								<td>3</td>
								<td>5</td>
								<td>Pedro de Souza</td>
							</tr>
							<tr>
								<td>4</td>
								<td>5</td>
								<td>Sofia de Souza</td>
							</tr>																		
						</tbody>
					</table>


					<p>Tabela pedido</p>
					<table class="table table-sm table-striped table-dark table-bordered table-hover">
						<thead class="thead-dark">
							<tr>
								<th>Id_pedido</th>
								<th>Id_funcionario</th>
								<th>Data_pedido</th>
								<th>Valor_pedido</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>5</td>
								<td>2020-10-07</td>
								<td>40</td>
							</tr>
							<tr>
								<td>2</td>
								<td>3</td>
								<td>2020-11-16</td>
								<td>50</td>
							</tr>
							<tr>
								<td>3</td>
								<td>3</td>
								<td>2020-11-24</td>
								<td>60</td>
							</tr>
							<tr>
								<td>4</td>
								<td>5</td>
								<td>2020-11-26</td>
								<td>70</td>
							</tr>
							<tr>
								<td>5</td>
								<td>5</td>
								<td>2020-11-27</td>
								<td>20</td>
							</tr>																		
						</tbody>
					</table>
				</div>			
		    </div>
		</div>
			

		<div class="card">
		    <div class="card-header" id="headingFour">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" id="select" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          SELECT: O comando SELECT é responsável por retornar dados para aplicações ou para outras instruções SQL.
		        </button>
		      </h5>
		    </div>
		    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#mysql">
		        <div class="card-body">	
					
					<h5>Síntaxe da instrução SELECT:</h5>
<pre>
	SELECT colunas
	FROM tabela(s)
	[WHERE condições]
	[GROUP BY grupo]
	[HAVING condições_grupo]
	[ORDER BY coluna(s)]
	[LIMIT limites];
</pre>	

					<h5>Exemplos de SELECT:</h5>
					<ul>
						<li class="mt-4">Selecionando todas as colunas de uma tabela.<br>
							SELECT * from cargo ORDER BY Id_cargo ASC

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Id_cargo</th>
										<th>Nome_cargo</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>PRESIDENTE</td>							
									</tr>
									<tr>
										<td>2</td>
										<td>Gerente</td>							
									</tr>
									<tr>
										<td>3</td>
										<td>Supervisor</td>							
									</tr>
									<tr>
										<td>4</td>
										<td>Revisor</td>							
									</tr>
									<tr>
										<td>5</td>
										<td>Redator</td>							
									</tr>
								</tbody>
							</table>

						</li>
						<li class="mt-4">Selecionando colunas específicas de uma tabela.<br>
							SELECT Nome_cargo from cargo ORDER BY Id_cargo ASC

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
										<th>Nome_cargo</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PRESIDENTE</td>							
									</tr>
									<tr>
										<td>Gerente</td>							
									</tr>
									<tr>									
										<td>Supervisor</td>							
									</tr>
									<tr>
										<td>Revisor</td>							
									</tr>
									<tr>
										<td>Redator</td>							
									</tr>
								</tbody>
							</table>


						</li>
						<li class="mt-4">Alias - Select com alias.<br>
							SELECT Nome_cargo as CARGO from cargo ORDER BY Id_cargo ASC

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
										<th>CARGO</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PRESIDENTE</td>							
									</tr>
									<tr>
										<td>Gerente</td>							
									</tr>
									<tr>									
										<td>Supervisor</td>							
									</tr>
									<tr>
										<td>Revisor</td>							
									</tr>
									<tr>
										<td>Redator</td>							
									</tr>
								</tbody>
							</table>


						</li>
						<li class="mt-4">Coluna virtual - Selecionar dados e criar coluna virtual.<br>
							SELECT Nome_cargo, "PJ"  as Tipo_contrato from cargo ORDER BY Id_cargo ASC

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_cargo</th>
										<th>Tipo_contrato</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PRESIDENTE</td>
										<td>PJ</td>							
									</tr>
									<tr>
										<td>Gerente</td>
										<td>PJ</td>							
									</tr>
									<tr>
										<td>Supervisor</td>
										<td>PJ</td>							
									</tr>
									<tr>
										<td>Revisor</td>
										<td>PJ</td>							
									</tr>
									<tr>
										<td>Redator</td>
										<td>PJ</td>							
									</tr>
								</tbody>
							</table>


						</li>
						<li class="mt-4">Cálculo - Selecionar dados, realizar cálculo para dar aumento do salário e atribuir um alias a coluna salário.<br>
							SELECT Nome_funcionario, Salario_funcionario * 1.1 as "Salario_com_aumento" from funcionario 

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Salario_com_aumento</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Manoel Ribeiro</td>
										<td>110.00</td>							
									</tr>
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>550.00</td>							
									</tr>
									<tr>
										<td>Marisa Estácio</td>
										<td>137.50</td>							
									</tr>
									<tr>
										<td>Alexandre Silva</td>
										<td>110.00</td>							
									</tr>
									<tr>
										<td>Margarida de Souza</td>
										<td>132.00</td>							
									</tr>
									<tr>
										<td>Alexandre Silva</td>
										<td>132.00</td>							
									</tr>
								</tbody>
							</table>
						</li>


						<li class="mt-4">DISTINCT - Selecionar dados sem exibir dados repetidos. Note que nesse exemplo o nome Alexandre Silva é mostrado uma única vez.<br>
							SELECT DISTINCT(Nome_funcionario) from funcionario 

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>																
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Manoel Ribeiro</td>														
									</tr>
									<tr>
										<td>Daniella Vasconcellos</td>						
									</tr>
									<tr>
										<td>Marisa Estácio</td>				
									</tr>
									<tr>
										<td>Alexandre Silva</td>			
									</tr>
									<tr>
										<td>Margarida de Souza</td>			
									</tr>								
								</tbody>
							</table>
						</li>

						
						<li class="mt-4">SELECT com INNER JOIN: A utilização de INNER JOIN possibilita trazer como resultado da consulta apenas os dados relacionados entre as tabelas.<br>
<pre>

SELECT
	funcionario.Nome_funcionario,
	funcionario.Salario_funcionario,
	cargo.Nome_cargo
FROM
	funcionario
	INNER JOIN cargo ON funcionario.Id_cargo = cargo.Id_cargo
</pre>	
						<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Salario_funcionario</th>
										<th>Nome_cargo</th>							
									</tr>
								</thead>
								<tbody>	
									<tr>
										<td>Manoel Ribeiro</td>
										<td>100.00</td>	
										<td>Redator</td>							
									</tr>
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>500.00</td>	
										<td>PRESIDENTE</td>							
									</tr>
									<tr>
										<td>Marisa Estácio</td>
										<td>100.00</td>	
										<td>Redator</td>							
									</tr>
									<tr>
										<td>Alexandre da Silva</td>
										<td>100.00</td>	
										<td>Redator</td>							
									</tr>								
									<tr>
										<td>Margarida de Souza</td>
										<td>120.00</td>	
										<td>Supervisor</td>						
									</tr>
									<tr>
										<td>Alexandre da Silva</td>
										<td>120.00</td>	
										<td>Gerente</td>							
									</tr>
								</tbody>
							</table>
						</li>


						<li>SELECT com LEFT JOIN: Levando em consideração uma consulta que envolva duas tabelas, mostra os dados relacionados entre as duas tabelas e os dados não relacionados da tabela posicionada a ESQUERDA da cláusula LEFT JOIN.

<pre>

SELECT
	cargo.Nome_cargo,
	funcionario.Nome_funcionario
FROM 
	cargo
	LEFT JOIN funcionario ON cargo.Id_cargo = funcionario.Id_cargo
</pre>						
								
							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_cargo</th>
										<th>Nome_funcionario</th>					
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td>Redator</td>
										<td>Manoel Ribeiro</td>								
									</tr>								
									<tr>
										<td>PRESIDENTE</td>
										<td>Daniella Vasconcellos</td>						
									</tr>
									<tr>
										<td>Gerente</td>
										<td>Marisa Estácio</td>						
									</tr>
									<tr>
										<td>Redator</td>
										<td>Alexandre Silva</td>						
									</tr>
									<tr>
										<td>Supervisor</td>
										<td>Margarida de Souza</td>						
									</tr>
									<tr>
										<td>Supervisor</td>
										<td>Alexandre Silva</td>						
									</tr>
									<tr>
										<td class="bg-warning">Revisor</td>
										<td></td>						
									</tr>
								</tbody>
							</table>
						</li>

						<li class="mt-4">SELECT com RIGHT JOIN: Levando em consideração uma consulta que envolva duas tabelas, mostra os dados relacionados entre as duas tabelas e os dados não relacionados da tabela posicionada a DIREITA da cláusula RIGHT JOIN.<br>
<pre>

SELECT
	funcionario.Nome_funcionario,
	cargo.Nome_cargo
FROM 
	funcionario
	right JOIN cargo ON funcionario.Id_cargo = cargo.Id_cargo 
</pre>	
								
						<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Nome_cargo</th>					
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td>Manoel Ribeiro</td>
										<td>Redator</td>																	
									</tr>								
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>PRESIDENTE</td>															
									</tr>
									<tr>
										<td>Marisa Estácio</td>	
										<td>Gerente</td>														
									</tr>
									<tr>
										<td>Alexandre Silva</td>
										<td>Redator</td>															
									</tr>
									<tr>
										<td>Margarida de Souza</td>	
										<td>Supervisor</td>														
									</tr>
									<tr>
										<td>Alexandre Silva</td>
										<td>Supervisor</td>															
									</tr>
									<tr>
										<td></td>
										<td class="bg-warning">Revisor</td>															
									</tr>
								</tbody>
							</table>
						</li>


						<li class="mt-4">SELECT associando múltiplas tabelas com INNER JOIN.

<pre>

SELECT
	funcionario.Nome_funcionario,
  cargo.Nome_cargo,
	dependente.Nome_depentente
FROM
	funcionario
	INNER JOIN cargo ON funcionario.Id_cargo = cargo.Id_cargo
	INNER JOIN dependente ON  funcionario.Id_funcionario = dependente.Id_funcionario
</pre>	
								
						<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Nome_cargo</th>
										<th>Nome_dependente</th>					
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td>Marisa Estácio</td>
										<td>Gerente</td>
										<td>Rodrigo Estácio</td>																	
									</tr>								
									<tr>
										<td>Marisa Estácio</td>
										<td>Gerente</td>
										<td>Jomário Estácio</td>															
									</tr>
									<tr>
										<td>Marigarida de Souza</td>
										<td>Supervisor</td>	
										<td>Pedro de Souza</td>														
									</tr>
									<tr>
										<td>Margarida de Souza</td>
										<td>Supervisor</td>
										<td>Sofia de Souza</td>															
									</tr>
								</tbody>
							</table>
						</li>	

						<li class="mt-4">
							SELECT com UNION ALL: A cláusula UNION ALL permite a união de dados obtidos a partir de vários comandos SELECT, sem a necessidade de relacionar as tabelas nas quais estes dados são encontrados. Nessa consulta eu adicionei condições na cláusula WHERE para filtrar dados e reduzir a quantidade de registros a serem mostrados.

<pre>

SELECT 
	funcionario.Nome_funcionario,
	funcionario.Salario_funcionario,
	"Tabela funcionario" as origem_dados
FROM
	funcionario
WHERE
	funcionario.Salario_funcionario > 150

UNION ALL

SELECT
	consultor.Nome_consultor,
	consultor.Salario_consultor,
	"Tabela consultor" as origem_dados
FROM
	consultor
WHERE
	consultor.Salario_consultor > 150

UNION ALL

SELECT
	empregado.Nome_empregado,
	"NÃO REGISTRADO" as Salario_empregado ,
	"Tabela empregado" as origem_dados
FROM
	empregado
WHERE
	empregado.Id_empregado = 2
</pre>						
							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Salario_funcionario</th>
										<th>Origem_dados</th>					
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>500</td>
										<td>Tabela funcionario</td>																	
									</tr>	
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>500</td>
										<td>Tabela consultor</td>																	
									</tr>
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>NÃO REGISTRADO</td>
										<td>Tabela empregado</td>																	
									</tr>
								</tbody>
							</table>
						</li>


						<li class="mt-4">
							Subquery: Uma subquery é um comando SELECT aninhado em outro comando SELECT.


<pre>

SELECT
	funcionario.Nome_funcionario,
	(SELECT cargo.Nome_cargo FROM cargo WHERE cargo.Id_cargo = funcionario.Id_cargo) as Cargo
FROM
	funcionario
LIMIT 3	
</pre>

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_funcionario</th>
										<th>Cargo</th>													
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td>Manoel Ribeiro</td>
										<td>Redator</td>																								
									</tr>
									<tr>
										<td>Daniella Vasconcellos</td>
										<td>PRESIDENTE</td>																								
									</tr>
									<tr>
										<td>Marisa Estácio</td>
										<td>Gerente</td>																								
									</tr>								
								</tbody>
							</table>
						</li>


						<li class="mt-4">Subquery com NOT IN: No exemplo abaixo, o SELECT busca todos os cargos cujo Id_cargo não constam na tabela funcionário.

<pre>

SELECT 
	cargo.Nome_cargo 
FROM 
	cargo 
WHERE 
	cargo.Id_cargo NOT IN(SELECT funcionario.Id_cargo FROM funcionario)
</pre>	

							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_cargo</th>											
									</tr>
								</thead>
								<tbody>	
									<tr>
										<td class="bg-warning">Revisor</td>																							
									</tr>															
								</tbody>
							</table>
						</li>

						<li class="mt-4">Subquery com IN: No exemplo abaixo, a consulta traz todos cargos cujo Id_cargo consta na tabela funcionario.

<pre>

SELECT 
	cargo.Nome_cargo 
FROM 
	cargo 
WHERE 
	cargo.Id_cargo IN(SELECT funcionario.Id_cargo FROM funcionario)
</pre>						
							<p class="mt-4">Resultado da consulta acima.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>							
										<th>Nome_cargo</th>											
									</tr>
								</thead>
								<tbody>	
									<tr>
										<td>Gerente</td>																							
									</tr>
									<tr>
										<td>PRESIDENTE</td>																							
									</tr>
									<tr>
										<td>Redator</td>																							
									</tr>
									<tr>
										<td>Supervisor</td>																							
									</tr>															
								</tbody>
							</table>

						</li>	
					</ul>
				</div>	
			</div>			
		</div>


		<div class="card">
		    <div class="card-header" id="headingFive">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" id="update" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		          UPDATE: O comando UPDATE é utilizado com a finalidade de alterar os dados de uma tabela.
		        </button>
		      </h5>
		    </div>
		    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#mysql">
			    <div class="card-body">
		
			
					<h5 class="mt-4">Exemplos de UPDATE.</h5>
					
					<ul class="mt-4">
						<li>UPDATE sem a cláusula WHERE: Atualizando o salário de todos os funcionários com um aumento de 10%.

<pre>

UPDATE funcionario
SET
	Salario_funcionario = Salario_funcionario * 1.1
</pre>		
						<p>Tabela funcionario após a atualização do salário.</p>
						<table class="table table-sm table-striped table-dark table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Id_funcionario</th>
									<th>Id_cargo</th>
									<th>Nome_funcionario</th>
									<th>Salario_funcionario</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>5</td>
									<td>Manoel Ribeiro</td>
									<td>110</td>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>Daniella Vasconcellos</td>
									<td>550</td>
								</tr>
								<tr>
									<td>3</td>
									<td>2</td>
									<td>Marisa Estácio</td>
									<td>137.50</td>
								</tr>
								<tr>
									<td>4</td>
									<td>5</td>
									<td>Alexandre Silva</td>
									<td>110</td>
								</tr>
								<tr>
									<td>5</td>
									<td>3</td>
									<td>Margarida de Souza</td>
									<td>132</td>
								</tr>
								<tr>
									<td>6</td>
									<td>3</td>
									<td>Alexandre Silva</td>
									<td>132</td>
								</tr>													
							</tbody>
						</table>
					</li>

					<li>UPDATE com a cláusula WHERE: Aplicando aumento de mais 10% sobre o salário do Id_funcionario = 2. 

<pre>

UPDATE funcionario
SET
	Salario_funcionario = Salario_funcionario * 1.1
WHERE
	Id_funcionario = 2
</pre>	
						<p>Tabela funcionario após a atualização do salário do funcionário cujo Id_funcionario = 2</p>
						<table class="table table-sm table-striped table-dark table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Id_funcionario</th>
									<th>Id_cargo</th>
									<th>Nome_funcionario</th>
									<th>Salario_funcionario</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>5</td>
									<td>Manoel Ribeiro</td>
									<td>110</td>
								</tr>
								<tr class="bg-warning">
									<td>2</td>
									<td>1</td>
									<td>Daniella Vasconcellos</td>
									<td class="bg-success">605</td>
								</tr>
								<tr>
									<td>3</td>
									<td>2</td>
									<td>Marisa Estácio</td>
									<td>137.50</td>
								</tr>
								<tr>
									<td>4</td>
									<td>5</td>
									<td>Alexandre Silva</td>
									<td>110</td>
								</tr>
								<tr>
									<td>5</td>
									<td>3</td>
									<td>Margarida de Souza</td>
									<td>132</td>
								</tr>
								<tr>
									<td>6</td>
									<td>3</td>
									<td>Alexandre Silva</td>
									<td>132</td>
								</tr>													
							</tbody>
						</table>
					</li>

					<li class="mt-4">UPDATE em duas tabelas sem a utilização de JOIN. Nesse exemplo, será aplicado um aumento de 5% para todos os funcionários que atenderam algum pedido.

<pre>

update funcionario, pedido
SET 
	funcionario.Salario_funcionario = funcionario.Salario_funcionario * 1.05
WHERE
	funcionario.Id_funcionario = pedido.Id_funcionario

</pre>	
										
						<p>Tabela funcionario após a atualização do salário dos funcionários que atenderam algum pedido.</p>
						<table class="table table-sm table-striped table-dark table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Id_funcionario</th>
									<th>Id_cargo</th>
									<th>Nome_funcionario</th>
									<th>Salario_funcionario</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>5</td>
									<td>Manoel Ribeiro</td>
									<td>110</td>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>Daniella Vasconcellos</td>
									<td>605</td>
								</tr>
								<tr class="bg-warning">
									<td>3</td>
									<td>2</td>
									<td>Marisa Estácio</td>
									<td class="bg-success">144,38</td>
								</tr>
								<tr>
									<td>4</td>
									<td>5</td>
									<td>Alexandre Silva</td>
									<td>110</td>
								</tr>
								<tr class="bg-warning">
									<td>5</td>
									<td>3</td>
									<td>Margarida de Souza</td>
									<td class="bg-success">138,60</td>
								</tr>
								<tr>
									<td>6</td>
									<td>3</td>
									<td>Alexandre Silva</td>
									<td>132</td>
								</tr>													
							</tbody>
						</table>
					</li>

					<li class="mt-4">UPDATE em duas tabelas COM a utilização de JOIN. Nesse exemplo, será aplicado MAIS um aumento de 5% para todos os funcionários que atenderam algum pedido.

<pre>

update funcionario
	INNER JOIN pedido ON funcionario.Id_funcionario = pedido.Id_funcionario
SET 
	funcionario.Salario_funcionario = funcionario.Salario_funcionario * 1.05
</pre>	
										
						<p>Tabela funcionario após a atualização do salário dos funcionários que atenderam algum pedido.</p>
						<table class="table table-sm table-striped table-dark table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
									<th>Id_funcionario</th>
									<th>Id_cargo</th>
									<th>Nome_funcionario</th>
									<th>Salario_funcionario</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>5</td>
									<td>Manoel Ribeiro</td>
									<td>110</td>
								</tr>
								<tr>
									<td>2</td>
									<td>1</td>
									<td>Daniella Vasconcellos</td>
									<td>605</td>
								</tr>
								<tr class="bg-warning">
									<td>3</td>
									<td>2</td>
									<td>Marisa Estácio</td>
									<td class="bg-success">151,59</td>
								</tr>
								<tr>
									<td>4</td>
									<td>5</td>
									<td>Alexandre Silva</td>
									<td>110</td>
								</tr>
								<tr class="bg-warning">
									<td>5</td>
									<td>3</td>
									<td>Margarida de Souza</td>
									<td class="bg-success">145,53</td>
								</tr>
								<tr>
									<td>6</td>
									<td>3</td>
									<td>Alexandre Silva</td>
									<td>132</td>
								</tr>													
							</tbody>
						</table>
					</li>

					<li>UPDATE com SUBQUERY: Nesse exemplo será atualizado o salário da tabela consultor com o valor salarial da tabela funcionario. Para que a atualização ocorra, o Id_funcionario deve ser igual ao Id_consultor e o salário do consultor deve ser menor que 120,00.

<pre>

update consultor
SET 
	consultor.Salario_consultor = (
		SELECT 
			funcionario.Salario_funcionario 
		FROM 
			funcionario 
		WHERE 
			funcionario.Id_funcionario = consultor.Id_consultor
		)
WHERE
	consultor.Salario_consultor < 120
</pre>						
										
							<p>Tabela consultor após a atualização.</p>
							<table class="table table-sm table-striped table-dark table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
										<th>Id_consultor</th>
										<th>Id_cargo</th>
										<th>Nome_consultor</th>
										<th>Salario_consultor</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bg-warning">
										<td>1</td>
										<td>5</td>
										<td>Manoel Ribeiro</td>
										<td class="bg-success">110</td>
									</tr>
									<tr>
										<td>2</td>
										<td>1</td>
										<td>Daniella Vasconcellos</td>
										<td>500</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2</td>
										<td>Marisa Estácio</td>
										<td>125</td>
									</tr>
									<tr class="bg-warning">
										<td>4</td>
										<td>5</td>
										<td>Alexandre Silva</td>
										<td class="bg-success">110</td>
									</tr>
									<tr>
										<td>5</td>
										<td>3</td>
										<td>Margarida de Souza</td>
										<td>120</td>
									</tr>
									<tr>
										<td>6</td>
										<td>3</td>
										<td>Alexandre Silva</td>
										<td>120</td>
									</tr>													
								</tbody>
							</table>
						</li>
					</ul>
				</div>
			</div>	
		</div>



		<div class="card">
		    <div class="card-header" id="headingSix">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" id="delete" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
		           DELETE: O comando DELETE é utilizado com a finalidade de apagar registros de uma tabela.
		        </button>
		      </h5>
		    </div>
		    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#mysql">
		      	<div class="card-body">
					
					<h5 class="mt-4">Exemplos de DELETE.</h5>

					<ul>
						<li>DELETE: Excluindo na tabela o consultor cujo Id_consultor seja igual a 6.

<pre>

DELETE FROM consultor
WHERE
	Id_consultor = 6
</pre>						
											
						</li>	

						<li>DELETE com INNER JOIN: Excluindo na tabela pedido, o registro atendido pelo funcionário cujo Id_funcionario é igual a 5 e a data do pedido está entre 01/10/2020 e 31/10/2020.

<pre>

DELETE pedido
FROM 
	funcionario
	INNER JOIN pedido ON funcionario.Id_funcionario = pedido.Id_funcionario
WHERE
	funcionario.Id_funcionario = 5 AND
	pedido.Data_pedido BETWEEN "2020-10-01" and "2020-10-31"
</pre>						
											
						</li>

						<li>DELETE com Subquery: Nesse exemplo, serão excluídos da tabela funcionario todos os funcionários que não atenderam nenhum pedido.

<pre>

DELETE FROM funcionario
WHERE
funcionario.Id_funcionario NOT IN( 
	SELECT
		pedido.Id_funcionario
	FROM
		pedido
)
</pre>

						</li>
					</ul>
					</div>
				</div>
			</div>


						
		</div>			

	</main>

	<script src="js/jquery-v3.5.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>