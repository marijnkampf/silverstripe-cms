<?php

/**
 * Portuguese (Brazil) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pt_BR', $lang) && is_array($lang['pt_BR'])) {
	$lang['pt_BR'] = array_merge($lang['en_US'], $lang['pt_BR']);
} else {
	$lang['pt_BR'] = $lang['en_US'];
}

$lang['pt_BR']['AssetAdmin']['CHOOSEFILE'] = 'Selecione Arquivo';
$lang['pt_BR']['AssetAdmin']['CONTENTMODBY'] = 'Conteúdos modificáveis por';
$lang['pt_BR']['AssetAdmin']['CONTENTUSABLEBY'] = 'Conteúdo utilizável por';
$lang['pt_BR']['AssetAdmin']['CREATED'] = 'Primeiro upload';
$lang['pt_BR']['AssetAdmin']['DELETEDX'] = '%s files.%s apagados';
$lang['pt_BR']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Remover miniaturas não usadas';
$lang['pt_BR']['AssetAdmin']['DELSELECTED'] = 'Remover arquivos selecionados';
$lang['pt_BR']['AssetAdmin']['DETAILSTAB'] = 'Detalhes';
$lang['pt_BR']['AssetAdmin']['FILENAME'] = 'Nome do arquivo';
$lang['pt_BR']['AssetAdmin']['FILESREADY'] = 'Arquivos prontos para upload:';
$lang['pt_BR']['AssetAdmin']['FILESTAB'] = 'Arquivos';
$lang['pt_BR']['AssetAdmin']['LASTEDITED'] = 'Ultima Atualização';
$lang['pt_BR']['AssetAdmin']['MOVEDX'] = 'Movido %s arquivos';
$lang['pt_BR']['AssetAdmin']['NEWFOLDER'] = 'Nova Pasta';
$lang['pt_BR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Não há nada para fazer upload';
$lang['pt_BR']['AssetAdmin']['NOWBROKEN'] = 'Estas páginas agora têm links quebrados:';
$lang['pt_BR']['AssetAdmin']['ONLYADMINS'] = 'Somente os administradores podem enviar arquivos %s';
$lang['pt_BR']['AssetAdmin']['OWNER'] = 'Dono';
$lang['pt_BR']['AssetAdmin']['SAVEDFILE'] = 'Arquivo guardado %s';
$lang['pt_BR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Salvar nome da pasta';
$lang['pt_BR']['AssetAdmin']['TITLE'] = 'Título';
$lang['pt_BR']['AssetAdmin']['TOOLARGE'] = '%s é muito grande (%s). Arquivos deste tipo não pode ser maior que %s';
$lang['pt_BR']['AssetAdmin']['TYPE'] = 'Tipo';
$lang['pt_BR']['AssetAdmin']['UNUSEDFILESTAB'] = 'Arquivos não usados';
$lang['pt_BR']['AssetAdmin']['UNUSEDFILESTITLE'] = 'Arquivos não usados';
$lang['pt_BR']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Miniaturas não usadas';
$lang['pt_BR']['AssetAdmin']['UPLOAD'] = 'Upload arquivos listados a seguir';
$lang['pt_BR']['AssetAdmin']['UPLOADEDX'] = 'Upload de %s arquivos';
$lang['pt_BR']['AssetAdmin']['UPLOADTAB'] = 'Upload';
$lang['pt_BR']['AssetAdmin']['VIEWASSET'] = 'Ver arquivo';
$lang['pt_BR']['AssetAdmin']['VIEWEDITASSET'] = 'Ver/editar arquivo';
$lang['pt_BR']['AssetAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_BR']['AssetAdmin_left.ss']['DELETE'] = 'Remover';
$lang['pt_BR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Remover as pastas selecionadas';
$lang['pt_BR']['AssetAdmin_left.ss']['FOLDERS'] = 'Pastas';
$lang['pt_BR']['AssetAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_BR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Selecione as pastas que deseja remover e, em seguida, clique no botão abaixo';
$lang['pt_BR']['AssetAdmin_left.ss']['TOREORG'] = 'Para reorganizar as suas pastas, arraste-as como desejar.';
$lang['pt_BR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Por favor, escolha uma página à esquerda.';
$lang['pt_BR']['AssetAdmin_right.ss']['WELCOME'] = 'Bem vindo ao';
$lang['pt_BR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Você não tem permissão para fazer upload de arquivos para esta pasta.';
$lang['pt_BR']['AssetTableField']['CREATED'] = 'Primeiro upload';
$lang['pt_BR']['AssetTableField']['DIM'] = 'Dimensões';
$lang['pt_BR']['AssetTableField']['FILENAME'] = 'Nome do Arquivo';
$lang['pt_BR']['AssetTableField']['LASTEDIT'] = 'Última Alteração';
$lang['pt_BR']['AssetTableField']['NOLINKS'] = 'Este arquivo não foi vinculado a nenhuma página';
$lang['pt_BR']['AssetTableField']['OWNER'] = 'Dono';
$lang['pt_BR']['AssetTableField']['PAGESLINKING'] = 'As páginas seguintes tem link para esse arquivo:';
$lang['pt_BR']['AssetTableField']['SIZE'] = 'Tamanho';
$lang['pt_BR']['AssetTableField.ss']['DELFILE'] = 'Remover este arquivo';
$lang['pt_BR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Arasstar para pasta à esquerda para mover arquivo';
$lang['pt_BR']['AssetTableField']['TITLE'] = 'Título';
$lang['pt_BR']['AssetTableField']['TYPE'] = 'Tipo';
$lang['pt_BR']['BulkLoaderAdmin']['CSVFILE'] = 'Arquivo CSV';
$lang['pt_BR']['BulkLoaderAdmin']['DATALOADED'] = 'Estes dados foram carregados em';
$lang['pt_BR']['BulkLoaderAdmin']['PRESSCNT'] = 'Pressione continuar para carregar estes dados em';
$lang['pt_BR']['BulkLoaderAdmin']['PREVIEW'] = 'Prever';
$lang['pt_BR']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'Funções';
$lang['pt_BR']['BulkLoaderAdmin_preview.ss']['RES'] = 'Resultados';
$lang['pt_BR']['CMSLeft.ss']['DELPAGE'] = 'Remover Páginas...';
$lang['pt_BR']['CMSLeft.ss']['DELPAGES'] = 'Remover as páginas selecionadas';
$lang['pt_BR']['CMSLeft.ss']['GO'] = 'Ir';
$lang['pt_BR']['CMSLeft.ss']['NEWPAGE'] = 'Nova Página...';
$lang['pt_BR']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Selecione as páginas que você quer remover e clique no botão abaixo';
$lang['pt_BR']['CMSLeft.ss']['SITECONT'] = 'Conteúdo do Site';
$lang['pt_BR']['CMSMain']['CANCEL'] = 'Cancelar';
$lang['pt_BR']['CMSMain']['CHOOSEREPORT'] = 'Selecione relatório';
$lang['pt_BR']['CMSMain']['COMPARINGV'] = 'Você está comparando as versões #%d e #%d';
$lang['pt_BR']['CMSMain']['COPYPUBTOSTAGE'] = 'Pretende mesmo copiar o conteúdo publicado para o site?';
$lang['pt_BR']['CMSMain']['DELETEFP'] = 'Remover do site publicado';
$lang['pt_BR']['CMSMain']['EMAIL'] = 'E-mail';
$lang['pt_BR']['CMSMain']['GO'] = 'Ir';
$lang['pt_BR']['CMSMain']['METADESCOPT'] = 'Descrição';
$lang['pt_BR']['CMSMain']['METAKEYWORDSOPT'] = 'Palavras-chave';
$lang['pt_BR']['CMSMain']['NEW'] = 'Novo';
$lang['pt_BR']['CMSMain']['NOCONTENT'] = 'sem conteúdo';
$lang['pt_BR']['CMSMain']['NOTHINGASSIGNED'] = 'Não tem nada atribuído a você.';
$lang['pt_BR']['CMSMain']['NOWAITINGON'] = 'Você não está esperando por ninguém.';
$lang['pt_BR']['CMSMain']['NOWBROKEN'] = 'As seguintes páginas agora tem links quebrados:';
$lang['pt_BR']['CMSMain']['NOWBROKEN2'] = 'Foi enviado uma email aos seus responsáveis que corrigirão essas páginas.';
$lang['pt_BR']['CMSMain']['OK'] = 'OK';
$lang['pt_BR']['CMSMain']['PAGEDEL'] = '%d página removida';
$lang['pt_BR']['CMSMain']['PAGENOTEXISTS'] = 'Esta página não existe';
$lang['pt_BR']['CMSMain']['PAGEPUB'] = '%d página publicada';
$lang['pt_BR']['CMSMain']['PAGESDEL'] = '%d páginas removidas';
$lang['pt_BR']['CMSMain']['PAGESPUB'] = '%d páginas publicadas';
$lang['pt_BR']['CMSMain']['PAGETYPEOPT'] = 'Tipo de Página';
$lang['pt_BR']['CMSMain']['PRINT'] = 'Imprimir';
$lang['pt_BR']['CMSMain']['PUBALLCONFIRM'] = 'Por favor publique todas as páginas no site, copiando content stage to live';
$lang['pt_BR']['CMSMain']['PUBALLFUN'] = 'Funcionalidade "Publicar Tudo"';
$lang['pt_BR']['CMSMain']['PUBALLFUN2'] = 'Apertar este botão equivale a ir em cada página individualmente e clicar em "Publicar". Serve para ser usado em situações em que foram editadas grandes quantidades de conteúdo, como por exemplo quando o site foi inicialmente construído.';
$lang['pt_BR']['CMSMain']['PUBPAGES'] = 'Feito: %d páginas publicadas';
$lang['pt_BR']['CMSMain']['REMOVEDFD'] = 'Remover do rascunho do site';
$lang['pt_BR']['CMSMain']['REMOVEDPAGE'] = 'Removido \'%s\' do site publicado';
$lang['pt_BR']['CMSMain']['RESTORE'] = 'Restaurar';
$lang['pt_BR']['CMSMain']['RESTORED'] = '\'%s\' restaurado com sucesso';
$lang['pt_BR']['CMSMain']['ROLLBACK'] = 'Reverter para esta versão';
$lang['pt_BR']['CMSMain']['ROLLEDBACKPUB'] = 'Reverteu para a versão publicada. A n´mero da nova versão é #%d';
$lang['pt_BR']['CMSMain']['ROLLEDBACKVERSION'] = 'Reverteu para a versão #%d. O número da nova versão é #%d';
$lang['pt_BR']['CMSMain']['SAVE'] = 'Salvar';
$lang['pt_BR']['CMSMain']['SENTTO'] = 'Enviar para %s %s para aprovação.';
$lang['pt_BR']['CMSMain']['STATUSOPT'] = 'Status';
$lang['pt_BR']['CMSMain']['TOTALPAGES'] = 'Total de páginas:';
$lang['pt_BR']['CMSMain']['VERSIONSNOPAGE'] = 'Não é possível encontrar página #%d';
$lang['pt_BR']['CMSMain']['VIEWING'] = 'Você está vendo a versão #%d, criada %s';
$lang['pt_BR']['CMSMain']['VISITRESTORE'] = 'visite restorepage/(ID)';
$lang['pt_BR']['CMSMain']['WAITINGON'] = 'Você está à espera de outras pessoas para trabalharem nestas <b>%d</b> páginas';
$lang['pt_BR']['CMSMain']['WORKTODO'] = 'Você tem trabalho a fazer nestas <b>%d</b> páginas.';
$lang['pt_BR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Adicionar ao rascunho do site e não publicar';
$lang['pt_BR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Adicionar Critério...';
$lang['pt_BR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Ações em massa';
$lang['pt_BR']['CMSMain_left.ss']['CHANGED'] = 'alterado';
$lang['pt_BR']['CMSMain_left.ss']['CLOSEBOX'] = 'clique para fechar caixa';
$lang['pt_BR']['CMSMain_left.ss']['COMMENTS'] = 'Comentários';
$lang['pt_BR']['CMSMain_left.ss']['COMPAREMODE'] = 'Modo de comparação (clique 2 abaixo)';
$lang['pt_BR']['CMSMain_left.ss']['CREATE'] = 'Criar';
$lang['pt_BR']['CMSMain_left.ss']['DEL'] = 'removido';
$lang['pt_BR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Remover as páginas selecionadas';
$lang['pt_BR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Remover do rascunho do site mas manter no site publicado';
$lang['pt_BR']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Editar no site rascunho e não publicar';
$lang['pt_BR']['CMSMain_left.ss']['EDITEDSINCE'] = 'Editado desde';
$lang['pt_BR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Permitir reordenamento tipo arrastar e largar';
$lang['pt_BR']['CMSMain_left.ss']['GO'] = 'Ir';
$lang['pt_BR']['CMSMain_left.ss']['KEY'] = 'Chave:';
$lang['pt_BR']['CMSMain_left.ss']['NEW'] = 'novo';
$lang['pt_BR']['CMSMain_left.ss']['OPENBOX'] = 'clique para abrir caixa';
$lang['pt_BR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'História da versão da Página';
$lang['pt_BR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publicar as páginas selecionadas';
$lang['pt_BR']['CMSMain_left.ss']['SEARCH'] = 'Busca';
$lang['pt_BR']['CMSMain_left.ss']['SEARCHTITLE'] = 'Procurar através de URL, Titúlo, Titúlo de menu, &amp; Conteúdo';
$lang['pt_BR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Seleccione as páginas que pretende alterar  &amp; depois clique numa acção:';
$lang['pt_BR']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Selecione as páginas que pretende duplicar, se pretende que as paginas filho sejam incluídas, e onde quer colocar as páginas duplicadas.';
$lang['pt_BR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Mostrar somente páginas alteradas';
$lang['pt_BR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Exibir versões não publicadas';
$lang['pt_BR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Conteúdo do Site e Estrutura';
$lang['pt_BR']['CMSMain_left.ss']['SITEREPORTS'] = 'Relatórios do Site';
$lang['pt_BR']['CMSMain_left.ss']['TASKLIST'] = 'Lista de Tarefas';
$lang['pt_BR']['CMSMain_left.ss']['WAITINGON'] = 'Aguardando';
$lang['pt_BR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Você têm alguma mensagem para o seu editor?';
$lang['pt_BR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Por favor, escolha uma página à esquerda.';
$lang['pt_BR']['CMSMain_right.ss']['LOADING'] = 'carregando...';
$lang['pt_BR']['CMSMain_right.ss']['MESSAGE'] = 'Mensagem';
$lang['pt_BR']['CMSMain_right.ss']['SENDTO'] = 'Enviar para';
$lang['pt_BR']['CMSMain_right.ss']['STATUS'] = 'Status';
$lang['pt_BR']['CMSMain_right.ss']['SUBMIT'] = 'Enviar para aprovação';
$lang['pt_BR']['CMSMain_right.ss']['WELCOMETO'] = 'Bem vindo ao';
$lang['pt_BR']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['pt_BR']['CMSMain_versions.ss']['NOTPUB'] = 'Não publicado';
$lang['pt_BR']['CMSMain_versions.ss']['PUBR'] = 'Editor';
$lang['pt_BR']['CMSMain_versions.ss']['UNKNOWN'] = 'Desconhecido';
$lang['pt_BR']['CMSMain_versions.ss']['WHEN'] = 'Quando';
$lang['pt_BR']['CMSRight.ss']['CHOOSEPAGE'] = 'Por favor, escolha uma página à esquerda.';
$lang['pt_BR']['CMSRight.ss']['ECONTENT'] = 'Alterar Conteúdo';
$lang['pt_BR']['CMSRight.ss']['WELCOMETO'] = 'Bem vindo ao';
$lang['pt_BR']['CommentList.ss']['CREATEDW'] = 'Comentários são criados quando uma das \'acções wokfow\' são emprenedidas - Publicar, Rejeictar, Submeter.';
$lang['pt_BR']['CommentList.ss']['NOCOM'] = 'Não há comentários nesta página.';
$lang['pt_BR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Adicionar listagem';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Procurar listagens';
$lang['pt_BR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Resultados da Pesquisa';
$lang['pt_BR']['ImageEditor.ss']['CANCEL'] = 'cancelar';
$lang['pt_BR']['ImageEditor.ss']['CROP'] = 'recorte';
$lang['pt_BR']['ImageEditor.ss']['HEIGHT'] = 'altura';
$lang['pt_BR']['ImageEditor.ss']['REDO'] = 'refazer';
$lang['pt_BR']['ImageEditor.ss']['ROT'] = 'girar';
$lang['pt_BR']['ImageEditor.ss']['SAVE'] = 'salvar&nbsp;imagem';
$lang['pt_BR']['ImageEditor.ss']['UNDO'] = 'desfazer';
$lang['pt_BR']['ImageEditor.ss']['UNTITLED'] = 'Documento sem Título';
$lang['pt_BR']['ImageEditor.ss']['WIDTH'] = 'largura';
$lang['pt_BR']['LeftAndMain']['CHANGEDURL'] = 'URL alterada para \'%s\'';
$lang['pt_BR']['LeftAndMain']['COMMENTS'] = 'Comentários';
$lang['pt_BR']['LeftAndMain']['FILESIMAGES'] = 'Arquivos &  Imagens';
$lang['pt_BR']['LeftAndMain']['HELP'] = 'Ajuda';
$lang['pt_BR']['LeftAndMain']['NEWSLETTERS'] = 'Newsletters';
$lang['pt_BR']['LeftAndMain']['PAGETYPE'] = 'Tipo de página:';
$lang['pt_BR']['LeftAndMain']['PERMAGAIN'] = 'Você foi desconectado do CMS. Se você quiser entrar novamente, digite um nome de usuário e senha abaixo.';
$lang['pt_BR']['LeftAndMain']['PERMALREADY'] = 'Sinto muito, mas você não pode acessar essa parte do CMS. Se você quiser entrar como outra pessoa, faça-o abaixo.';
$lang['pt_BR']['LeftAndMain']['PERMDEFAULT'] = 'Por favor escolha um modo de autenticação e entre suas credenciais para acessar o CMS';
$lang['pt_BR']['LeftAndMain']['PLEASESAVE'] = 'Por favor salve a página: Esta página não pode ser atulizada porque ainda não foi salva.';
$lang['pt_BR']['LeftAndMain']['REPORTS'] = 'Relatórios';
$lang['pt_BR']['LeftAndMain']['REQUESTERROR'] = 'Erro no pedido';
$lang['pt_BR']['LeftAndMain']['SAVED'] = 'salvo';
$lang['pt_BR']['LeftAndMain']['SAVEDUP'] = 'Salvo';
$lang['pt_BR']['LeftAndMain']['SECURITY'] = 'Segurança';
$lang['pt_BR']['LeftAndMain']['SITECONTENT'] = 'Conteúdo do Site';
$lang['pt_BR']['LeftAndMain']['SITECONTENTLEFT'] = 'Conteúdo do Site';
$lang['pt_BR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Esta é a';
$lang['pt_BR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versão que você está atualmente usando, tecnicamente é a CVS';
$lang['pt_BR']['LeftAndMain.ss']['ARCHS'] = 'Site Arquivado';
$lang['pt_BR']['LeftAndMain.ss']['DRAFTS'] = 'Rascunho do Site';
$lang['pt_BR']['LeftAndMain.ss']['EDIT'] = 'Alterar';
$lang['pt_BR']['LeftAndMain.ss']['EDITPROFILE'] = 'Perfil';
$lang['pt_BR']['LeftAndMain.ss']['LOADING'] = 'Carregando...';
$lang['pt_BR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Registrado como';
$lang['pt_BR']['LeftAndMain.ss']['LOGOUT'] = 'Sair';
$lang['pt_BR']['LeftAndMain.ss']['PUBLIS'] = 'Site Publicado';
$lang['pt_BR']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Website';
$lang['pt_BR']['LeftAndMain.ss']['SWITCHTO'] = 'Mudar para:';
$lang['pt_BR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Visualização da página:';
$lang['pt_BR']['LeftAndMain']['STATUSTO'] = 'Status alterado para \'%s\'';
$lang['pt_BR']['LeftAndMain']['TREESITECONTENT'] = 'Conteúdo do Site';
$lang['pt_BR']['MemberList']['ADD'] = 'Adicionar';
$lang['pt_BR']['MemberList']['EMAIL'] = 'Email';
$lang['pt_BR']['MemberList']['FILTERBYG'] = 'Filtar por grupo';
$lang['pt_BR']['MemberList']['FN'] = 'Nome';
$lang['pt_BR']['MemberList']['PASSWD'] = 'Senha';
$lang['pt_BR']['MemberList']['SEARCH'] = 'Busca';
$lang['pt_BR']['MemberList']['SN'] = 'Sobrenome';
$lang['pt_BR']['MemberList.ss']['FILTER'] = 'Filtros';
$lang['pt_BR']['MemberList_Table.ss']['EMAIL'] = 'Endereço de Email';
$lang['pt_BR']['MemberList_Table.ss']['FN'] = 'Nome';
$lang['pt_BR']['MemberList_Table.ss']['PASSWD'] = 'Senha';
$lang['pt_BR']['MemberList_Table.ss']['SN'] = 'Sobrenome';
$lang['pt_BR']['MemberTableField']['ADD'] = 'Adicionar';
$lang['pt_BR']['MemberTableField']['ADDEDTOGROUP'] = 'Adicionado membro ao grupo';
$lang['pt_BR']['MemberTableField.ss']['ADDNEW'] = 'Adicionar novo';
$lang['pt_BR']['MemberTableField.ss']['DELETEMEMBER'] = 'Remover este membro';
$lang['pt_BR']['MemberTableField.ss']['EDITMEMBER'] = 'Editar este membro';
$lang['pt_BR']['MemberTableField.ss']['SHOWMEMBER'] = 'Mostrar este membro';
$lang['pt_BR']['NewsletterAdmin']['FROMEM'] = 'Do endereço de email';
$lang['pt_BR']['NewsletterAdmin']['MEWDRAFTMEWSL'] = 'Novo rascunho de newsletter';
$lang['pt_BR']['NewsletterAdmin']['NEWLIST'] = 'Nova mauling list';
$lang['pt_BR']['NewsletterAdmin']['NEWNEWSLTYPE'] = 'Novo tipo de newsletter';
$lang['pt_BR']['NewsletterAdmin']['NEWSLTYPE'] = 'Tipo de Newsletter';
$lang['pt_BR']['NewsletterAdmin']['PLEASEENTERMAIL'] = 'Por favor entre um endereço de email';
$lang['pt_BR']['NewsletterAdmin']['RESEND'] = 'Reenviar';
$lang['pt_BR']['NewsletterAdmin']['SAVE'] = 'Salvar';
$lang['pt_BR']['NewsletterAdmin']['SAVED'] = 'Salvo';
$lang['pt_BR']['NewsletterAdmin']['SEND'] = 'Enviar...';
$lang['pt_BR']['NewsletterAdmin']['SENDING'] = 'Enviando emails...';
$lang['pt_BR']['NewsletterAdmin']['SENTTESTTO'] = 'Enviar teste para';
$lang['pt_BR']['NewsletterAdmin']['SHOWCONTENTS'] = 'Exibir conteúdo';
$lang['pt_BR']['NewsletterAdmin_BouncedList.ss']['EMADD'] = 'Endereço de email';
$lang['pt_BR']['NewsletterAdmin_BouncedList.ss']['HAVEBOUNCED'] = 'Emails que foram devolvidos';
$lang['pt_BR']['NewsletterAdmin_BouncedList.ss']['NOBOUNCED'] = 'Nenhum email enviado foi devolvido.';
$lang['pt_BR']['NewsletterAdmin_BouncedList.ss']['UNAME'] = 'Nome do usuário';
$lang['pt_BR']['NewsletterAdmin_left.ss']['ADDDRAFT'] = 'Adicionar novo rascunho';
$lang['pt_BR']['NewsletterAdmin_left.ss']['ADDTYPE'] = 'Adicionar novo tipo';
$lang['pt_BR']['NewsletterAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_BR']['NewsletterAdmin_left.ss']['DEL'] = 'Remover';
$lang['pt_BR']['NewsletterAdmin_left.ss']['DELETEDRAFTS'] = 'Remover os rascunhos selecionados';
$lang['pt_BR']['NewsletterAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_BR']['NewsletterAdmin_left.ss']['NEWSLETTERS'] = 'Newsletters';
$lang['pt_BR']['NewsletterAdmin_left.ss']['SELECTDRAFTS'] = 'Selecione os rascunhos que pretende eliminar e, em seguida, clique no botão abaixo';
$lang['pt_BR']['NewsletterAdmin_right.ss']['CANCEL'] = 'Cancelar';
$lang['pt_BR']['NewsletterAdmin_right.ss']['ENTIRE'] = 'Enviar para toda a lista';
$lang['pt_BR']['NewsletterAdmin_right.ss']['ONLYNOT'] = 'Enviar só para pessoas para quem nunca foi enviado';
$lang['pt_BR']['NewsletterAdmin_right.ss']['SEND'] = 'Enviar newsletter';
$lang['pt_BR']['NewsletterAdmin_right.ss']['SENDTEST'] = 'Enviar teste para';
$lang['pt_BR']['NewsletterAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_BR']['NewsletterAdmin_right.ss']['WELCOME2'] = 'seção de administração de newsletter. Por favor escolha uma pasta da esquerda.';
$lang['pt_BR']['NewsletterAdmin_SiteTree.ss']['DRAFTS'] = 'rascunhos';
$lang['pt_BR']['NewsletterAdmin_SiteTree.ss']['MAILLIST'] = 'Mailing List';
$lang['pt_BR']['NewsletterAdmin_SiteTree.ss']['SENT'] = 'Items Enviados';
$lang['pt_BR']['NewsletterAdmin_UnsubscribedList.ss']['NOUNSUB'] = 'Nenhum utilizador anulou a subscrição desta newsletter.';
$lang['pt_BR']['NewsletterAdmin_UnsubscribedList.ss']['UNAME'] = 'Nome do usuário';
$lang['pt_BR']['NewsletterAdmin_UnsubscribedList.ss']['UNSUBON'] = 'Anular subscrição em';
$lang['pt_BR']['NewsletterList.ss']['CHOOSEDRAFT1'] = 'Por favor, escolha um rascuro à esquerda, ou';
$lang['pt_BR']['NewsletterList.ss']['CHOOSEDRAFT2'] = 'adicionar um';
$lang['pt_BR']['NewsletterList.ss']['CHOOSESENT'] = 'Por favor escolha um item enviado na esquerda';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['CHANGED'] = 'Número de detalhes alterados:';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['IMPORTED'] = 'Novos membros importados:';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['IMPORTNEW'] = 'Importados novos membros';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['SEC'] = 'segundos';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['SKIPPED'] = 'Registros pulados:';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['TIME'] = 'Tempo demorado:';
$lang['pt_BR']['Newsletter_RecipientImportField.ss']['UPDATED'] = 'Menbros actualizados';
$lang['pt_BR']['Newsletter_RecipientImportField_Table.ss']['CONTENTSOF'] = 'Conteúdos de';
$lang['pt_BR']['Newsletter_RecipientImportField_Table.ss']['NO'] = 'Cancelar';
$lang['pt_BR']['Newsletter_RecipientImportField_Table.ss']['RECIMPORTED'] = 'Destinatários importados de';
$lang['pt_BR']['Newsletter_RecipientImportField_Table.ss']['YES'] = 'Confirme';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['DATE'] = 'Data';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['EMAIL'] = 'Email';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['FN'] = 'Nome';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['NEWSNEVERSENT'] = 'A Newsletter Nunca Foi Enviada para os Seguintes Subscritores';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['RES'] = 'Resultado';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['SENDBOUNCED'] = 'O envio para os Seguintes Destinatários foi devolvido';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['SENDFAIL'] = 'O envio para os Seguintes Destinatários  Falhou';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['SENTOK'] = 'O Envio para os Seguintes Destinatários foi bem Sucedido';
$lang['pt_BR']['Newsletter_SentStatusReport.ss']['SN'] = 'Sobrenome';
$lang['pt_BR']['PageComment']['COMMENTBY'] = 'Comentário por \'%s\' em %s';
$lang['pt_BR']['PageCommentInterface.ss']['COMMENTS'] = 'Comentários';
$lang['pt_BR']['PageCommentInterface.ss']['NEXT'] = 'próximo';
$lang['pt_BR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Ninguém comentou esta página ainda.';
$lang['pt_BR']['PageCommentInterface.ss']['POSTCOM'] = 'envie seu comentário';
$lang['pt_BR']['PageCommentInterface.ss']['PREV'] = 'anterior';
$lang['pt_BR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'este comentário não é spam';
$lang['pt_BR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'Este cometário é spam';
$lang['pt_BR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Postado por';
$lang['pt_BR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'remover este comentário';
$lang['pt_BR']['ReportAdmin_left.ss']['REPORTS'] = 'Relatórios';
$lang['pt_BR']['ReportAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_BR']['ReportAdmin_right.ss']['WELCOME2'] = 'seção de relatórios. Por favor escolha um relatório específico da esquerda.';
$lang['pt_BR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Relatórios';
$lang['pt_BR']['SecurityAdmin']['ADDMEMBER'] = 'Adicionar Membro';
$lang['pt_BR']['SecurityAdmin']['ADVANCEDONLY'] = 'Esta secção é só para utilizadores avançados.
 Ver <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">esta página</a>
para mais informções.';
$lang['pt_BR']['SecurityAdmin']['NEWGROUP'] = 'Novo Grupo';
$lang['pt_BR']['SecurityAdmin']['SAVE'] = 'Salvar';
$lang['pt_BR']['SecurityAdmin']['SGROUPS'] = 'Grupos de segurança';
$lang['pt_BR']['SecurityAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_BR']['SecurityAdmin_left.ss']['DEL'] = 'Remover';
$lang['pt_BR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Remover os grupos selecionados';
$lang['pt_BR']['SecurityAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_BR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grupos de Segurança';
$lang['pt_BR']['SecurityAdmin_left.ss']['SELECT'] = 'Selecione as páginas que deseja remover e clique no botão abaixo';
$lang['pt_BR']['SecurityAdmin_left.ss']['TOREORG'] = 'Para reorganizar os seu site, arraste as páginas como desejar.';
$lang['pt_BR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_BR']['SecurityAdmin_right.ss']['WELCOME2'] = 'seção de administração de segurança. Por favor escolha um grupo da esquerda.';
$lang['pt_BR']['SideReport']['EMPTYPAGES'] = 'Páginas em branco';
$lang['pt_BR']['SideReport']['LAST2WEEKS'] = 'Páginas editadas nas últimas 2 semanas';
$lang['pt_BR']['SideReport']['REPEMPTY'] = 'O relatório %s está vazio.';
$lang['pt_BR']['StaticExporter']['BASEURL'] = 'URL Base';
$lang['pt_BR']['StaticExporter']['EXPORTTO'] = 'Exportar para a pasta';
$lang['pt_BR']['StaticExporter']['FOLDEREXPORT'] = 'Pasta para exportar para';
$lang['pt_BR']['StaticExporter']['NAME'] = 'Relatório estático';
$lang['pt_BR']['StaticExporter']['ONETHATEXISTS'] = 'Especifique uma pasta que existe';
$lang['pt_BR']['SubmittedFormEmail.ss']['SUBMITTED'] = 'Os seguintes dados foram submetidos ao seu website:';
$lang['pt_BR']['TaskList.ss']['BY'] = 'por';
$lang['pt_BR']['ThumbnailStripField']['NOTAFOLDER'] = 'Isto não é uma pasta';
$lang['pt_BR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Selecione uma pasta)';
$lang['pt_BR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Pode aceder ao site arquivado através deste link:';
$lang['pt_BR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Você pediu para ver o conteúdo do nosso site em';
$lang['pt_BR']['WaitingOn.ss']['ATO'] = 'atribuído a';

?>