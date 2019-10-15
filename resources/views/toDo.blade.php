<h1>Workshop: Flipboard</h1>
<hr>
<p>Vamos desenvolver uma rede social que irá exibir artigos (posts) publicados por journals/Magazines.</p>
<br>

<p><b>Requisitos Funcionais:</b></p>
<ul>
	<li><u><b>Feito</b></u> O usuário poderá criar o seu cadastro</li>
	<li><u><b>Feito</b></u> O usuário poderá fazer login no sistema para poder navegar</li>
	<li><u><b>Não feito</b></u> Cada journal poderá publicar vários posts</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar a lista de jornals</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar os detalhes de um Journal específico</li>
	<li><u><b>Feito</b></u> O usuário poderá seguir os journals para receber os posts na sua timeline.</li>
	<li><u><b>Feito</b></u> O usuário poderá ver a lista de posts publicados por um journal específico</li>
	<li><u><b>Não Feito</b></u> O usuário poderá visualizar os detalhes de um Post específico</li>
	<li><u><b>Não Feito</b></u> O usuário poderá curtir os posts.</li>
	<li><u><b>Feito</b></u> O sistema deverá armazenar quem visualizou cada post</li>
	<li><u><b>Não Feito</b></u> O sistema deverá armazenar quem curtiu cada post</li>
	<li><u><b>Feito</b></u> O sistema deverá armazenar quem segue cada Journal</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar em sua timeline os posts não lidos dos journals que ele segue</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar em sua timeline posts sugeridos pelo sistema</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar em sua timeline os posts lidos</li>
	<li><u><b>Não Feito</b></u> O usuário poderá visualizar a lista de usuários cadastrados</li>
	<li><u><b>Feito</b></u> O usuário poderá visualizar o perfil de outros usuários e ver quais interações foram realizadas pelo usuário, por exemplo, quais jornals o usuário segue, que posts ele visualizou e que posts ele curtiu</li>
	<li>Desafio: Criar uma página com estatísticas:
		<ul>
			<li>post com mais curtidas;</li>
			<li>post com mais visualizações;</li>
			<li>journal com mais seguidores;</li> 
			<li>usuário que mais visualizaram posts;</li> 
			<li>usuário que mais seguem journals;</li> 
			<li>usuário com mais deram curtidas</li>
		</ul> 
</ul>
<br>

<p><b>Lista de Tarefas:</b></p>
<ol>
	<li>Fazer download do projeto base do GitHub</li>	
	<li>Configurar o .env</li>
	<li>Configurar o config/database.php</li>
	<br>

	<li>Habilitar o pacote de autenticação make:Auth</li>
	<li>Habilitar o vue para melhorar o front dos cadastros</li>
	<br>

	<li>Criar o migration Journal</li>
	<li>Criar o migration Posts</li>
	<li>Criar o migration Follow</li>
	<li>Criar o migration Likes</li>
	<li>Criar o migration Visualized</li>
	<br>

	<li>Criar o factory Journal</li>
	<li>Criar o seed Journal</li>
	<li>Criar o factory Post</li>
	<li>Criar o seed Post</li>
	<li>Configurar o DatabaseSeeder.php</li>
	<li>Executar o comando de criação de banco e inserção de registros no Banco de Dados</li>
	<br>

	<li>Criar o model Journal e configurar as relações</li>
	<li>Criar o model Posts e configurar as relações</li>
	<li>Criar o model Follow e configurar as relações</li>
	<li>Criar o model user e configurar as relações</li>
	<br>

	<li>Criar as rotas</li>
	<br>

	<li>Criar o controller JournalController</li>
	<li>Criar o controller PostController</li>
	<li>Criar o controller UserController</li>
	<br>

	<li>Criar a view journal/list.blade.php</li>
	<li>Criar a view journal/show.blade.php</li>
	<li>Criar a view post/list.blade.php</li>
	<li>Criar a view post/show.blade.php</li>
	<li>Criar a view timeline/show.blade.php</li>
	<li>Criar a view user/show.blade.php</li>
	<li>Criar a view user/list.blade.php</li>
	<br>

</ol>
<br>

<p><b>Outras Informações:</b></p>
<br>

<p>Comandos Banco de Dados:</p>
<p>
<textarea cols="90" rows="15">
php artisan make:migration create_journals_table --create
php artisan make:model Journal --migration
php artisan make:factory Journal --model=Journal
php artisan make:seed JournalTableSeeder
php artisan migrate
php artisan migrate:fresh
php artisan migrate:fresh --seed
</textarea>
<br>

<p>Comandos Controller:</p>
<p>
<textarea cols="90" rows="15">
php artisan make:controller JournalController
php artisan make:controller JournalController --resource
php artisan make:controller JournalController --resource --model=Journal
</textarea>
<br>

<p>Comandos Auth (Laravel > 6):</p>
<p>
<textarea cols="90" rows="15">
composer require laravel/ui --dev
php artisan ui vue --auth
npm install && npm run dev
</textarea>
<br>

<p>Rotas:</p>
<p>
<textarea cols="90" rows="15">
/home
/journals
/journal/{journal}
/seguir/revista/{journal}/usuario/{user}
/naoseguir/revista/{journal}/usuario/{user}
/posts
/post/{post}
/users
/user/{user}
/curtir/post/{post}/usuario/{user}
/descurtir/post/{post}/usuario/{user}
/visualizado/post/{post}/usuario/{user}
</textarea>
</p>
<br>
<a href="/">Main</a><br>
<a href="/home">Home</a><br>
<a href="/posts">Posts</a><br>
<a href="/journals">Journals</a><br>
<a href="/users">Users</a><br>