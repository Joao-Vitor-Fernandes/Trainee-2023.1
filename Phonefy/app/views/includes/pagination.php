<?php
// Obtém o valor atual da busca e da página da URL
$busca = $_GET['busca'] ?? '';
$pagina = $_GET['pagina'] ?? 1;

// Verifica se a página atual é um número válido
if (!is_numeric($pagina) || $pagina < 1) {
    $pagina = 1;
}

// Função para gerar a URL com base na busca e na página
function gerarURL($busca, $pagina) {
    $url = 'http://localhost:8080/home/lista-posts/search?';
    $url .= 'busca=' . urlencode($busca);
    $url .= '&pagina=' . urlencode($pagina);
    return $url;
}
?>

<nav aria-label="Page navigation" class="pagination">
    <ul>
        <li>
            <a href="<?=gerarURL($busca, $pagina - 1)?>" aria-label="Anterior">
                Anterior
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
            <li class="<?= $page_number == $page ? "page-item" : "" ?>">
                <a href="<?= $_SERVER['REQUEST_URI'] ?>&pagina=<?= $page_number ?>"><?= $page_number ?></a>
            </li>
        <?php endfor; ?>

        <li>
            <a href="<?=gerarURL($busca, $pagina + 1)?>" aria-label="Próxima">
                Próxima
            </a>
        </li>
    </ul>
</nav>

