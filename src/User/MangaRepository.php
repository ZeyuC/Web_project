<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 30/04/18
 * Time: 18:35
 */
namespace User;


class MangaRepository
{
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * UserRepository constructor.
     * @param \PDO $connection
     */
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll()
    {


        $rows = $this->connection->query('SELECT * FROM "manga" ORDER BY "nom" ')->fetchAll(\PDO::FETCH_OBJ);
        $mangas = [];
        foreach ($rows as $row) {
            $manga = new Manga();
            $manga->setNom($row->nom) ;

            if($row->auteur != null){ $manga->setAuteur($row->auteur) ;}
            if($row->genre  != null){ $manga->setGenre($row->genre)   ;}
            if($row->statut != null){ $manga->setStatut($row->statut) ;}
            if($row->note   != null){ $manga->setNote($row->note)     ;}
            /*if($row->nb_note!= null){ $manga->setNbNote($row->nb_note);}*/
            if($row->nb_chap!= null){ $manga->setNbChap($row->nb_chap);}
            if($row->debut  != null){ $manga->setDebut($row->debut)   ;}
            if($row->fin    != null){ $manga->setFin($row->fin)       ;}

            $mangas[] = $manga;
        }

        return $mangas;
    }


}