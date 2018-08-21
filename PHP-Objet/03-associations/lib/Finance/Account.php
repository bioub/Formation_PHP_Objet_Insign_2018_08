<?php

namespace Insign\Finance;



class Account
{
    // Exercice
    // 3 propriétés :
    // - proprietaire (string)
    // - solde (int)
    // - type (string, 3 choix : Compte Courant, PEL, PEA)
    public const COURANT = 'Compte Courant';
    public const PEL = 'Plan Epargne Logement';
    public const PEA = 'Plan Epargne en Action';

    private const TYPES = [self::COURANT, self::PEL, self::PEA];

    /** @var Owner */
    protected $owner;

    /** @var int */
    protected $balance = 0;

    /** @var string */
    protected $type;

    /**
     * CompteBancaire constructor.
     * @param Owner $proprietaire
     * @param string $type
     * @throws \Exception
     */
    public function __construct(Owner $owner, string $type)
    {
        $this->owner = $owner;
        $this->validateType($type);
        $this->type = $type;
    }

    /**
     * @return Owner
     */
    public function getOwner(): Owner
    {
        return $this->owner;
    }

    /**
     * @param Owner $owner
     * @return Account
     */
    public function setOwner(Owner $owner): Account
    {
        $this->owner = $owner;
        return $this;
    }



    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Account
     * @throws \Exception
     */
    public function setType(string $type): Account
    {
        $this->validateType($type);
        $this->type = $type;
        return $this;
    }

    // Tous les getters
    // 2 setter pour proprietaire et type (pas pour solde)


    // 2 méthodes crediter et debiter
    // elles recoivent en entrée un montant et mettent à jour le solde
    /**
     * @param int $montant
     * @return $this
     * @throws \Exception
     */
    public function credit(int $montant)
    {
        if ($montant <= 0) {
            throw new Exception\AmountNegativeException('The amount must be positive');
        }

        $this->balance += $montant;
        return $this;
    }

    /**
     * @param int $montant
     * @return $this
     * @throws \Exception
     */
    public function debit(int $montant)
    {
        if ($montant <= 0) {
            throw new Exception\AmountNegativeException('The amount must be positive');
        }

        if ($this->balance - $montant < 0) {
            throw new Exception\BalanceNegativeException("The balance can't be negative");
        }

        $this->balance -= $montant;
        return $this;
    }

    // constructeur (avec solde toujours à 0)

    // validation (avec exception si possible, sinon echo)
    // vérifier les types
    // découverts interdit (pas de solde négatif)



    /**
     * @param $type
     * @throws \Exception
     */
    protected function validateType($type)
    {
        if (!in_array($type, self::TYPES)) {
            throw new \Exception("Le type $type n'existe pas");
        }
    }

    // Exercice
    // Créer une classe Proprietaire
    // Associer la classe Proprietaire côté Compte
}