<?php
namespace User;


class UsersRepository
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
        $rows = $this->connection->query('SELECT * FROM "users"')->fetchAll(\PDO::FETCH_OBJ);
        $users = [];
        foreach ($rows as $row) {
            $user = new Users();
            $user
                ->setPseudo($row->pseudo)
                ->setAdmin($row->admin)
                ->setMdp($row->mdp)
                ->setBirthday(new \DateTimeImmutable($row->birthday));
            $users[] = $user;
        }

        return $users;
    }

   /* public function verifier_mdp($uname,$mdp)
    {
        $rows = $this->connection->query('SELECT * FROM "users" where '.$uname.'= pseudo ');
        $user = new Users();
        foreach ($rows as $row) {
            $user->setMdp($row->mdp);
        }
        if ( $user->getMdp() == $mdp)
            echo "true";
        else
            echo "false";
    }*/

}