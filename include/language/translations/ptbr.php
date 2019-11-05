<?php

$lang['sorry'] = 'Desculpe';
$lang['after_release'] = 'after release';
$lang['position'] = 'Posição';
$lang['team'] = 'Jogador';
$lang['points'] = 'Pontos';
$lang['points_short'] = 'pts';
$lang['country'] = 'Cidade';
$lang['solved'] = 'Resolvido';
$lang['home'] = 'Home';
$lang['profile'] = 'Perfil';
$lang['scores'] = 'Placar';
$lang['log_in'] = 'Log in';
$lang['log_out'] = 'Log out';
$lang['close'] = 'Fechar';
$lang['error'] = 'Erro';
$lang['profile_settings'] = 'Configurações de Perfil';
$lang['view_public_profile'] = 'Ver Perfil Público';
$lang['hint'] = 'Dica';
$lang['hints'] = 'Dicas';
$lang['no_hints_available'] = 'As dicas ainda não foram disponibilizadas.';
$lang['challenge'] = 'Desafio';
$lang['added'] = 'Adicionado';
$lang['challenges'] = 'Desafio';
$lang['category'] = 'Categoria';
$lang['ctf_empty'] = 'Seu CTF parece u pouco vazio! Comece adicionando uma categoria através do console de gerenciamento.';
$lang['available_in'] = 'Disponível em';
$lang['cat_unavailable'] = 'Categoria indisponível';

$lang['two_factor_auth'] = 'Autenticação em dois passos (Two-factor)';
$lang['two_factor_auth_required'] = 'Autenticação em dois passos requerieda';
$lang['enable_two_factor_auth'] = 'Habilitar autenticação em dois passos';
$lang['disable_two_factor_auth'] = 'Desabilitar autenticação em dois passos';
$lang['generate_codes'] = 'Gerar códigos';
$lang['using_totp'] = 'usando TOTP';
$lang['scan_with_totp_app'] = 'Scaneie com seu app TOTP';
$lang['authenticate'] = 'Autenticar';

$lang['save_changes'] = 'Alterar configurações';
$lang['reset_password'] = 'Resetar senha';
$lang['choose_password'] = 'Escolher senha';
$lang['password'] = 'Senha';
$lang['email_password_on_signup'] = 'Um email de confirmação contendo uma senha aleatória será enviado para seu email.';

$lang['register'] = 'Registre';
$lang['register_your_team'] = 'Registre seu jogador';
$lang['account_signup_information'] = 'Conta individual para cada jogador. {password_information}';
$lang['team_name'] = 'Nome do jogador';
$lang['select_team_type'] = 'Por favor, selecione seu tipo de jogador';
$lang['registration_closed'] = 'Registro está atualmente fechado, contudo, você ainda pode <a href="interest"> registrar seu interesse nos novos eventos</a>.';
$lang['please_fill_details_correctly'] = 'Por favor, preencha todos os detalhes corretamente.';
$lang['invalid_team_type'] = 'Isso não parece um tipo dejogador válido.';
$lang['team_name_too_long_or_short'] = 'O nome do seu jogador é muito curto ou muito longo.';
$lang['email_not_whitelisted'] = 'Email não está na whitelist. Por favor, escolha um email pertencente awhitelist ou contate os organizadores.';
$lang['user_already_exists'] = 'Uma conta com seu nome de usuario ou email já cadastrado no sistema.';
$lang['signup_successful'] = 'Login feito com sucesso';
$lang['signup_successful_text'] = 'Obrigado por registrar-se! Seu email escolhido é: {email}. Tenha certeza de verificar sua caixa de spam e email por nosso email pode ter sido colocada nela. Fique ligado pois novas atualizações podem surgir!';
$lang['your_password_is'] = 'Sua senha é';
$lang['your_password_was_set'] = 'Senha escolhida durante o cadastro.';

$lang['signup_email_subject'] = '{site_name} detalhes de conta';
$lang['signup_email_success'] =
    '{team_name}, seu registro no {site_name} foi feito com sucesso.' .
    "\r\n" .
    "\r\n" .
    '{signup_email_availability}' .
    "\r\n" .
    "\r\n" .
    '{signup_email_password}' .
    "\r\n" .
    "\r\n" .
    'Fique atento as atualizações!' .
    "\r\n" .
    "\r\n" .
    'Obrigado pela atenção!!!'  .
    "\r\n" .
    '{site_name}'
;
$lang['signup_email_account_availability_message_login_now'] = 'Agora você pode se logar utilizando seu email e sua senha escolhida.';
$lang['signup_email_account_availability_message_login_later'] = 'Quando a competição iniciar, por favor utilize esse email para se logar.';

$lang['register_interest'] = 'Registro de interesse';
$lang['register_interest_text'] = 'Nós gostariamos de rodar novos eventos futuramente. Envie um email a seguir se você estiver interessado em ser informado sobre novos eventos. Ao fazer isso, você concorda que seu email seja compartilhado com outras plataformas de CTF.';

$lang['expression_of_interest'] = 'Expressão de Interesse';
$lang['recruitment_text'] = 'Gostou de nossos patrocinadores? Eles estão contratando. Por favor, preencha os dados a seguir se você gostaria de ser informado de oportunidades de nossos patrocinadores. Todo jogador pode preencher esse formulário individualmente. <b>Atenção:</b> iremos compartilhar seus dados pessoais apenas com nossos patrocinadores. Nós não vamos mandar spam para você. Apenas os endereços inseridos nesse formulário poderão receber esse tipo de informação.';
$lang['name_optional'] = 'Nome (optional)';
$lang['city_optional'] = 'Cidade (optional)';

$lang['email_address'] = 'Endereço de Email';
$lang['password'] = 'Senha';
$lang['name_nick'] = 'Nome / Nome do jogador / nickname';
$lang['remember_me'] = 'Lembrar-me';
$lang['forgotten_password'] = 'Eu Esqueci minha senha.';

$lang['please_request_view'] = 'Por favor, requira a visualização';
$lang['please_request_page'] = 'Por favor, solicite uma pagina para visualização';
$lang['please_supply_country_code'] = 'Por favor, insira o código da cidade';
$lang['not_a_valid_link'] = 'Isso não é um link válido.';
$lang['not_a_valid_email'] = 'Isso não me parece um email. Por favor, retorne e verifique o formulário.';
$lang['please_select_country'] = 'Por favor, escolha uma cidade';

$lang['no_file_found'] = 'Não foram encontrados arquivos.';
$lang['invalid_team_key'] = 'Chave de jogador inválida.';
$lang['user_not_enabled'] = 'Esse usuário não está habilitado, e não poderá baixar arquivos da plataforma.';
$lang['file_not_available'] = 'Esse arquivo não está disponível até o momento.';

$lang['challenge_details'] = 'Detalhes dos desafios';
$lang['no_challenge_for_id'] = 'Nenhum desafio encontrado para esse ID, ou o desafio não está público';
$lang['no_category_for_id'] = 'Nenhuma categoria encontrada com esse ID, ou a categoria não está pública';
$lang['challenge_not_available'] = 'Desafio ainda não foi liberado';
$lang['challenge_not_solved'] = 'Esse desafio não foi resolvido por um de algumdos jogadores.';
$lang['challenge_solved_by_percentage'] = 'Esse desafio foi resolvido por {solve_percentage}% de nossos usuários participantes.';

$lang['challenge_solved_first'] = 'Primeiro a resolver esse desafio!';
$lang['challenge_solved_second'] = 'Segundo a resolver esse desafio!';
$lang['challenge_solved_third'] = 'Terceiro a resolver esse desafio!';

$lang['correct_flag'] = 'Flag correta, você é incrível!';
$lang['incorrect_flag'] = 'Flag incorreta, tente novamente.';
$lang['submission_awaiting_mark'] = 'Sua submisão está sendo avaliada uma confirmação manual.';
$lang['please_enter_flag'] = 'Entre com a flag do desafio:';
$lang['submit_flag'] = 'Submeter flag';
$lang['no_remaining_submissions'] = 'Você não possui mais tentativas restantes. Caso você tenha feito algum erro de submissão, contate os organizadores.';

$lang['no_category_with_id'] = 'Não há categorias cadastradas com esse ID';

$lang['cat_unavailable_explanation'] = 'Essa categoria não está habilitada. Ela estará disponibilizada {available_from} ({available_from_time_remaining} from now) até {available_until} ({available_until_time_remaining} a partir de agora)';

$lang['hidden_challenge_worth'] = 'Desafio escondido vale {pts} pontos';

$lang['available_in'] = 'Disponível em {available_in} (a partir de {from} até {to})';
$lang['minimum_time_between_submissions'] = 'Tempo mínimo de {time} entre as submissões.';
$lang['num_submissions_remaining'] = '{num_remaining} tentativas restantes.';
$lang['time_remaining'] = '{time} restante';

$lang['challenge_relies_on'] = 'Os detalhes deste desafio serão mostrados apenas depois {relies_on_link} no link {relies_on_category_link} quando a categoria for resolvida por um dos jogadores.';

$lang['no_reset_data'] = 'No reset data found.';

$lang['scoreboard'] = 'Placar';
$lang['first_solvers'] = 'Primeiros';
$lang['percentage_solvers'] = 'Resolvido por';
$lang['unsolved'] = 'Não resolvido';

$lang['user_details'] = 'Detalhes de usuário';
$lang['no_user_found'] = 'Não foi encontrado usuário com esse ID';
$lang['non_competing_user'] = 'Usuário listado como não competidor.';
$lang['no_information'] = 'Sem informação';
$lang['no_solves'] = 'Esse usuário resolveu nenhum desafio até o momento!';
$lang['no_exceptions'] = 'Não há  exceptions para esse usuário';
$lang['solved_challenges'] = 'Desafios resolvidos';
$lang['total_solves'] = 'Total:';
$lang['no_challenges_solved'] = 'Nenhum desafio resolvido até o momento!';

$lang['action_success'] = 'Sucesso!';
$lang['action_failure'] = 'Falha!';
$lang['action_something_went_wrong'] = 'Algo errado aconteceu. Isso parece que essa tentaiva de ação feita por você falhou.';
$lang['generic_error'] = 'Algo de errado aconteceu.';

$lang['year'] = 'ano';
$lang['month'] = 'mes';
$lang['day'] = 'dia';
$lang['hour'] = 'hora';
$lang['minute'] = 'minuto';
$lang['second'] = 'segundo';
$lang['append_to_time_to_make_plural'] = 's';

$lang['user_class_user'] = 'Usuário';
$lang['user_class_moderator'] = 'Moderador';
$lang['user_class_unknown'] = 'Classe desconhecida';

$lang['manage'] = '<b>Gerenciar </b>';
$lang['add_news_item'] = 'Adicione novos itens';
$lang['list_news_item'] = 'Listar novos items';
$lang['news'] = 'Noticias';

$lang['categories'] = 'Categorias';
$lang['add_category'] = 'Adicionar categoria';
$lang['list_categories'] = 'Listar categoria';

$lang['add_challenge'] = 'Adicionar desafio';
$lang['list_challenges'] = 'Listar desafio';

$lang['submissions'] = 'Submissão';
$lang['list_submissions_in_need_of_marking'] = 'Listar flags enviadas para marcação manual';
$lang['list_all_submissions'] = 'Listar todas as submissões';

$lang['users'] = 'Usuário';
$lang['list_users'] = 'Listar usuários';
$lang['user_types'] = 'Tipos de usuários';
$lang['add_user_type'] = 'Adicionar tipo de usuário';
$lang['list_user_types'] = 'Listar os tipos de usuários';

$lang['signup_rules'] = 'Regras de submissão';
$lang['list_rules'] = 'Lista de regras';
$lang['new_rule'] = 'Nova Regra';
$lang['test_rule'] = 'Testar regra';

$lang['single_email'] = 'Email único email';
$lang['email_all_users'] = 'Email para todos os usuários';

$lang['new_hint'] = 'Nova dica';
$lang['list_hints'] = 'Listar dica';

$lang['dynamic_content'] = 'Conteúdo dinâmico';
$lang['new_menu_item'] = 'Novo item de menu';
$lang['list_menu_items'] = 'Listar todos os itens do menu';
$lang['menu'] = 'Menu';
$lang['new_page'] = 'Nova Página';
$lang['list_pages'] = 'Listar páginas';
$lang['pages'] = 'Paginas';

$lang['exceptions'] = 'Exceções';
$lang['list_exceptions'] = 'Listar exceções';
$lang['clear_exceptions'] = 'Limpar exceções';

$lang['search'] = 'Procurar';

