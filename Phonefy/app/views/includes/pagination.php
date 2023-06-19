<?php
// Obtém o valor atual da busca e a URL da página
$busca = $_GET['busca'] ?? '';
$getUrl = $_SERVER['HTTP_HOST'].$_SERVER['PATH_INFO'];

function gerarURL($getUrl, $busca, $pagina) {
    $url = 'http://' . $getUrl;
    if (!empty($busca)) {
        $url .= '?busca=' . urlencode($busca);
        $url .= '&pagina=' . urlencode($pagina);
    }
    else {
        $url .= '?pagina=' . urlencode($pagina);
    }
    return $url;
}
?>

<nav aria-label="Page navigation" class="pagination">
    <ul>
        <li>
            <a href="<?=gerarURL($getUrl,$busca, $page > 1 ? $page - 1 : 1)?>" aria-label="Anterior">
                Anterior
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
            <li class="<?= $page_number == $page ? "page-item" : "" ?>">
                <a href="<?=gerarURL($getUrl, $busca,$page_number)?>"><?= $page_number ?></a>
            </li>
        <?php endfor; ?>

        <li>
            <a href="<?=gerarURL($getUrl,$busca, $page < $total_pages ? $page + 1 : $total_pages)?>" aria-label="Próxima">
                Próxima
            </a>
        </li>
    </ul>
</nav>

