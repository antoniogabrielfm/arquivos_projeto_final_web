<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Homepage de Cadastro</title>

        <style type="text/css">@import "css/formata.css";</style> 
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        
        <script>
        $(document).ready(function(){
        $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');          

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
        else $(this).find('span').html('&#x25BC;')
        })
        });
        </script>

    </head>
    <body>
        <div id="container">
            <div id='cssmenu'>
                <ul>
                    <li class='active has-sub'><a href='index.php'><span>Home</span></a>
                        <ul>
                            <li class='has-sub'><a href='historia.php'><span>Nossa História</span></a>                                
                            </li>                            
                        </ul>                   
                    </li>
                    <li><a href='localizacao.php'><span>Nossa localização</span></a></li>
                    <li class='active has-sub'><a href='#'><span>Empresas</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>1º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>2º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sicredi.com.br/" target="_blank"><span>Banco Sicredi - Sala 25</span></a></li>
                                    <li class='last'><a href="http://asofbm.org/Site/novo/htm/index.aspx" target="_blank"><span>Associação dos Oficiais da Brigada Militar - Sala 28</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>3º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sesirs.org.br/" target="_blank"><span>Sesi Educação</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>4º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sesirs.org.br/" target="_blank"><span>Sesi Cursos</span></a></li>
                                    <li class='last'><a href='#'><span>Exportadora de Madeiras Fontainive - Sala 44</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>5º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sergs.org.br/" target="_blank"><span>Sergs - Sindicato dos Enfermeiros - Salas 51/52</span></a></li>
                                    <li class='last'><a href="http://www.grupoguiton.com.br/" target="_blank"><span>Grupo Guiton - Salas 53/54</span></a></li> 
                                    <li class='last'><a href="http://www.abradigue.com.br/" target="_blank"a href='#'><span>Abradigue - Associação Brasileira dos Distribuidores Guerra - Sala 55</span></a></li> 
                                    <li class='last'><a href="http://www.fgfs.org.br/" target="_blank"><span>Federação Gaúcha de Futebol de Salão - Sala 56</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>6º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>7º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sesirs.org.br/" target="_blank"><span>Sesi Odontologia</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>8º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.sesirs.org.br/" target="_blank"><span>Sesi Medicina e Laboratório</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>9º Andar</span></a>
                                <ul>
                                    <li><a href="http://www.siargs.com.br/" target="_blank"><span>Siargs - Sindicato dos Adubos</span></a></li>
                                    <li class='last'><a href="http://www.antaq.gov.br/Portal/default.asp?#" target="_blank"><span>Antaq - Agência Nacional de Transportes Aquaviários - salas 92,93,94</span></a></li> 
                                    <li class='last'><a href="http://www.dflogistica.com.br/" target="_blank"><span>D & F Logística - sala 95</span></a></li> 
                                    <li class='last'><a href="http://www.natividade.adv.br/" target="_blank"><span>Natividade e Gonçalves Advogados Associados - sala 96</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>10º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li>                                     
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>11º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>12º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>13º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>14º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>15º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li>                                     
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>16º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>17º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>18º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>19º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>20º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>21º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                     
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>22º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                    <li class='last'><a href='#'><span>Empresa</span></a></li> 
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>23º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>24º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>
                                    <li class='last'><a href='#'><span>Empresa</span></a></li>                                     
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>25º Andar</span></a>
                                <ul>
                                    <li><a href='#'><span>Empresa</span></a></li>                                    
                                </ul>
                            </li>

                        </ul>
                    </li>                    
                    <li class='last'><a href='#'><span>Fale Conosco</span></a></li> 
                    <nav>
                        <ul>
                            <li id="login">
                                <a id="login-trigger" href="#">
                                    Login <span>▼</span>
                                </a>
                                <div id="login-content">
                                    <form>
                                        <fieldset id="inputs">
                                            <input id="usuario" type="usuario" name="Usuario" placeholder="Digite seu nome de usuário" required>   
                                            <input id="password" type="password" name="Password" placeholder="Digite sua senha" required>
                                        </fieldset>
                                        <fieldset id="actions">
                                            <input type="submit" id="submit" value="Log in">                                            
                                        </fieldset>
                                    </form>
                                </div>                     
                            </li>                            
                        </ul>
                    </nav>
                </ul>

                <header>
                    <section id="conteudo">

