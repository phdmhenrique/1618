create database website1618;
use website1618;

create table quemSomos
(
	id int(3) auto_increment not null,
	conteudo text
);

create table quemSomos
(
	id int(3) primary key auto_increment not null,    
    conteudo text
);

insert into quemSomos(conteudo) values 
	("Aqui na <b>1618</b> acreditamos fortemente que o único jeito de realizar juntos é partilhando do mesmo propósito. Isso define quem somos. Encorajando e desafiando todo dia, nos desenvolvendo cada vez melhor e mais fortes. Provocando, idealizando e realizando. Errando rápido e aprendendo mais rápido ainda. No fundo, todos queremos fazer coisas incríveis");

create table oQueFazemos
(	
	id int(3) primary key auto_increment not null,    
    conteudoPrincipal text, 
    conteudoDesign text,   
    conteudoDesenvolvimento text,
    conteudoMarca text
);
    
insert into oQueFazemos(conteudoPrincipal,conteudoDesign,conteudoDesenvolvimento,conteudoMarca) values
	("Encorajamos ações. Perspectiva dos outros só é possível quando todos são encorajados a participar. São os valores que moldam nossa percepção de realidade e determinam nossas escolhas",
     "Oferecemos vários serviços de design de interface do usuário. Seguimos as últimas tendências",
     "Oferecemos o serviço de desenvolvimento WEB. Desde sites de apresentação aos E-commerces",
     "Vamos te ajudar a conectar sua marca e a forma como sua marca será percebida no mundo e pelos seus clientes");
		
create table nossoProjeto
(
	id int(3) primary key auto_increment not null,
    fraseInicial text,   
    conteudoDandelion text,  
    conteudoPqCompartilhar text,
    conteudoComoFuncionaUm text,  
    conteudoComoFuncionaDois text, 
    conteudoPqUtilizar text,
    qtdeUsuarios varchar(10),    
    qtdeContribuicoes varchar(10), 
    qtdeComunidades varchar(10)
);
    
insert into nossoProjeto(fraseInicial,conteudoDandelion,conteudoPqCompartilhar,conteudoComoFuncionaUm,conteudoComoFuncionaDois,conteudoPqUtilizar,qtdeUsuarios,qtdeContribuicoes,qtdeComunidades) values 
	("A vida não é verão o tempo inteiro, mas duas pessoas podem compartilhar um guarda-chuva e sobreviver à tempestade juntas",			
    "A dadiva de compartilhar permite não só o indivíduo estender a mão ao próximo como nos permite lembrar por que vivemos em sociedade, pois somos mais fortes quando estamos unidos e ajudamos uns aos outros. A <b>Dandelion</b> é um projeto da <b>1618</b> que através plataforma digital quem vem não só auxiliar mas promover a economia do compartilhar, permitindo que comunidades se tornem um ecossistema de ajuda mútua entre moradores de uma comunidade local",     
    "Compartilhar funciona como um estímulo para você buscar mais informações, desafios e evoluir. É uma forma de fazer com que você enxergue novas perspectivas. No final das contas, quem compartilha tem muito a ganhar com tal atitude",  
    "<b>(1) - </b> A Dandelion funciona no estilo plataforma social, onde cada usuário pode criar seupróprio grupo, dentro deste grupo podem ser definidos os canais (tópicos) de tipos de serviços, doações e caridades que os seus membros podem oferecer ou solicitar dentro do grupo. Se oferece o que se pode, se pega o que precisa. Além de poderem interagir e discutir assuntos pertinentes",
    "<b>(2) - </b> Uma vez oferecido a doação/serviço/caridade, ela pode ser solicitada por outros membros da comunidade, nas informações do serviço podem ser encontradas informações importantes como, <b>Detalhes, Horários, Pessoas que solicitaram com sucesso e Pessoas que estão na fila de espera</b> o valor em destaque é o 'peso' que este serviço tem dentro da comunidade, não é uma moeda de troca, contudo é obtida ao oferecer contribuições bem sucedidas para a comunidade mensurando o seu engajamento, assim permitindo ter prioridade ao solicitar contribuições de outros membros",
    "<b>Dandelion</b> é um plataforma totalmente digital e gratuita, planejada especialmente para o gerenciamento de comunidades que promovem a contribuição de esforços entre seus membros. Através dela é possível mensurar a contribuição de cada um dentro do grupo, além de oferecer todo o suporte necessário para a comunicação entre os membros.",      
    "1200+",          
    "800+",
    "50+");
    
create table nossoTime
(
	id int(3) primary key auto_increment not null,
    textoInicial text, 
    nomeIntegrante varchar(50),
    descricaoIntegrante text,    
    imagemIntegrante varchar(20)
);

insert into nossoTime (textoInicial,nomeIntegrante,descricaoIntegrante,imagemIntegrante) values
	("Confiança em quem está no seu time importa mais do que o próprio projeto",
     "Diogo Pereira",
     "Está com a 1618 desde seu início, tendo trabalhado conosco para construir nossos projetos de nível AA+, usando apenas as tecnologias de mercado da melhor qualidade",
     "us-1.png");
     
insert into nossoTime (nomeIntegrante,descricaoIntegrante,imagemIntegrante) values
	("Pablo Monteiro",
     "Gosta de programar milhões de linhas de código para garantir que nossos projetos não voem para o espaço",
     "us-1.png");
     
insert into nossoTime (nomeIntegrante,descricaoIntegrante,imagemIntegrante) values
	("Wolnei Cordeiro",
     "Diretor Criativo da 1618 e responsável por dar vida aos nossos projetos, desde esboços conceituais até a sua concepção, linha de código por linha de código",
     "us-1.png");    
     
UPDATE nossotime set imagemIntegrante = "us-2.png" where id=2;
UPDATE nossotime set imagemIntegrante = "us-3.png" where id=3;

create table images
(
	id int(3) primary key auto_increment,
    nomeImagem varchar(255)
);

insert into images (nomeImagem) values
	("1.jpg"),
    ("2.jpg"),
    ("3.jpg"),
    ("compartilhar_1.jpg"),
    ("compartilhar_2.jpg"),
    ("dandelion_1.png"),
    ("dandelion_2.png");
    

