<nav aria-label="Page navigation" class="pagination">
    <ul>
        <li>
            <a href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" aria-label="Anterior">
                Anterior
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
            <li class="<?= $page_number == $page ? "page-item" : "" ?>">
                <a href="?pagina=<?= $page_number ?>"><?= $page_number ?></a>
            </li>
        <?php endfor; ?>

        <li>
            <a href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>" aria-label="Próxima">
                Próxima
            </a>
        </li>
    </ul>
</nav>