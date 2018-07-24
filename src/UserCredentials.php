<?php
/**
 * This file is part of the prooph/event-store-client.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStoreClient;

class UserCredentials
{
    /** @var string */
    private $username;
    /** @var string */
    private $password;

    public function __construct(string $username, string $password)
    {
        if (empty($username)) {
            throw new \InvalidArgumentException('Username cannot be empty');
        }
        if (empty($password)) {
            throw new \InvalidArgumentException('Password cannot be empty');
        }

        $this->username = $username;
        $this->password = $password;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
    }
}
