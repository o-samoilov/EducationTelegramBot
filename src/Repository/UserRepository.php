<?php

namespace App\Repository;

use App\Entity\TelegramChat;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    // ########################################

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    // ########################################

    public function create(TelegramChat $telegramChat)
    {
        $user = new User();

        $user->setChat($telegramChat);
        $user->setNotRegister();

        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush($user);

        return $user;
    }

    public function findByChatId(\App\Entity\TelegramChat $chat): ?\App\Entity\User
    {
        return $this->createQueryBuilder('user')
                    ->andWhere('user.chat = :chat')
                    ->setParameter('chat', $chat)
                    ->getQuery()
                    ->getOneOrNullResult();
    }

    // ########################################
}
