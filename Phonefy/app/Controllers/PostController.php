<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{
    public function preenche_tabela_post(){
        // $posts = App::get('database')->selectAll('posts');
        // $users = App::get('database')->selectAll('users');
        // $tables = [
        //     'posts' => $posts,
        //     'users' => $users,
        // ];

        // // Associar o nome do autor aos posts(autor é o id do user)
        // foreach ($posts as $post) {
        // $author = $this->getUserById($users, $post->author);
        // $post->author_name = $author->name;
        // }

        // return view('admin/lista_de_posts', $tables);

        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                return redirect('admin/posts');
            }
        }

        $items_per_page = 3;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countAll('posts');
        
        if ($start_limit > $rows_count) {
            return redirect('admin/posts');
        }
        
        $total_pages = ceil($rows_count / $items_per_page);

        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);
        $users = App::get('database')->selectAll('users');

        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        // Associar o nome do autor aos posts(autor é o id do user)
        foreach ($posts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }

        return view('admin/lista_de_posts', compact("posts", "users", "page", "total_pages"));
    }

    // Função auxiliar para buscar o usuário pelo ID
    private function getUserById($users, $userId)
    {
        foreach ($users as $user) {
            if ($user->id === $userId) {
                return $user;
            }
        }

        return null; // Caso o usuário não seja encontrado
    }

    public function view_tabela_post(){
        // erro de sintaxe
        // $post = App::get('database')->select('posts', $id);
        //return view('admin/modal', $post); 
    }

    public function create_tabela_post(){

        // Obtenha o nome original da imagem
        $fileName = $_FILES['imagem']['name'];
        // Obtenha a extensão do arquivo
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        // Gere um novo nome para o arquivo usando o título
        $newFileName = $_POST['titulo'] . '_' . $fileName;

        
        $imageDirectory = 'imagens-posts/';
        if (!file_exists($imageDirectory)) {
            mkdir($imageDirectory, 0755, true); // Cria o diretório com permissões adequadas
        }
        // Defina o caminho completo do novo arquivo
        $imagePath = 'imagens-posts/' . $newFileName;
        // Mova o arquivo temporário para o diretório correto com o novo nome
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagePath);

        $parameters = [
            'title' => $_POST['titulo'],
            'author' => $_POST['autor'],
            'created_at' => $_POST['data'],
            'image' => $imagePath,
            'content' => $_POST['conteudo'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }

    public function delete_tabela_post(){
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
    }
    public function index()
    {
        return view('site/teste');
    }

    public function editar_tabela_post()
    {
        $parameters = [
            'title' => $_POST['titulo'],
            'author' => $_POST['autor'],
            'created_at' => $_POST['data'],
            'content' => $_POST['conteudo'],
        ];

        // Verificar se um novo arquivo de imagem foi enviado
        if ($_FILES['imagem']['size'] > 0) {
            // Obter informações sobre o arquivo de imagem enviado
            $fileName = $_FILES['imagem']['name'];
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = $_POST['titulo'] . '_' . $fileName;
            $imageDirectory = 'imagens-posts/';

            // Criar o diretório se não existir
            if (!file_exists($imageDirectory)) {
                mkdir($imageDirectory, 0755, true);
            }

            // Mover o arquivo temporário para o diretório com o novo nome
            $imagePath = $imageDirectory . $newFileName;
            
            // Excluir a imagem antiga, se existir
            $oldImagePath = $_POST['image'];
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            move_uploaded_file($_FILES['imagem']['tmp_name'], $imagePath);

            // Atualizar o parâmetro 'image' com o novo caminho
            $parameters['image'] = $imagePath;
        }

        App::get('database')->edit($_POST['id'], 'posts', $parameters);

        header('Location: /admin/posts');
    }



    public function exibirImagem($filename)
{
    $path = __DIR__ . '/../imagens-posts/' . $filename;
    if (file_exists($path)) {
        header('Content-Type: image/jpeg'); // Defina o tipo de conteúdo correto para o tipo de imagem
        readfile($path);
    } else {
        http_response_code(404); // Retorne um código de resposta 404 se a imagem não for encontrada
        echo 'Imagem não encontrada';
    }
}
}