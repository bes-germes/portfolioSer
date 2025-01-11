<?php
/* Smarty version 5.4.2, created on 2025-01-11 18:31:12
  from 'file:C:\projects\site_portfolio/assets/frontend/mains/main_for_projects.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67828ec0235939_76109825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c785923c22ac1aee27830ca640ab9476e604801' => 
    array (
      0 => 'C:\\projects\\site_portfolio/assets/frontend/mains/main_for_projects.php',
      1 => 1736609466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67828ec0235939_76109825 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\projects\\site_portfolio\\assets\\frontend\\mains';
?><section class="section_1" style="width: 100%;">
	<div style="width: 65%; padding: 7%; padding-bottom: 2%; height: fit-content;/* padding-bottom: 2%; *//* padding-left: 25%; *//* padding-right: 25%; */margin: 0%;">
		<article style="display: grid; width: 50%; align-self: flex-start;">
			<h1 style="justify-self: start;">Представляем вам</h1>
			<p  style="justify-self: center;">лучшие проекты</p>
			<h1 style="justify-self: end;">базовой кафедры</h1>
		</article>
		<div class="container" style="display: flex; flex-direction: column; gap: 30px; margin-top: 2rem; width: 100%;">
            <select name="pets" id="pet-select">
                <option value="">--Please choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>
            <input>
            </input>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                </svg>
            </button>
		</div>
        <div id="projects" class="container" style="display: flex; flex-direction: column; gap: 30px; margin-top: 2rem; width: 100%; min-height: 200px; align-items: center;">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('query_projects')->handle(array('select'=>"*",'from'=>"info_project",'orderby'=>"id",'limit'=>"3",'offset'=>"0"), $_smarty_tpl);?>

            <div style="display: flex;flex-direction: column;align-items: center; justify-content: center;">
                <button id="load_project_button" type="submit" style="width: auto;height: auto;opacity: 100%; vertical-align: middle; border: none; background-color: none;" onclick="loadProjets('<?php echo $_smarty_tpl->getValue('ACTION');?>
');"/>
                    <!--<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 30 30">
                        <rect width="29" height="29" x=".5" y=".5" stroke="#202020" rx="14.5"/>
                        <path fill="#202020" d="M14 24.896a1 1 0 0 0 2 0h-2Zm1.707-20.499a1 1 0 0 0-1.414 0l-6.364 6.364a1 1 0 0 0 1.414 1.414L15 6.518l5.657 5.657a1 1 0 0 0 1.414-1.414l-6.364-6.364ZM16 24.896V5.104h-2v19.792h2Z"/>
                    </svg>--> <!-- Если элементы закончились -->
					<svg id="load_project_svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 30 30">
					  <rect width="29" height="29" x="29.499" y="29.5" stroke="#202020" rx="14.5" transform="rotate(-180 29.499 29.5)"/>
					  <path fill="#202020" d="M15.999 5.104a1 1 0 1 0-2 0h2Zm-1.707 20.498a1 1 0 0 0 1.414 0l6.364-6.363a1 1 0 0 0-1.414-1.415l-5.657 5.657-5.657-5.657a1 1 0 1 0-1.414 1.415l6.364 6.363Zm-.293-20.498v19.791h2V5.104h-2Z"/>
					</svg> <!-- Если элементы ещё имеются -->
                </button>
                <p id="load_project_p" style="display: none;">Кажется вы всё посмотрели</p>
            </div>
        </div>
	</div>
	<!--<div style=" height: auto; display: flex; align-items: center; justify-content: end; flex-direction: row; width: 100%; height: 10%; background-color: #EA5657;">
		<p>Посмотрите все наши проекты</p> 
		<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
		</svg>
	</div>-->
</section><?php }
}
