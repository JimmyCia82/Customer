<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 16/10/2018
 * Time: 2:45 PM
 */

namespace Customer;

require '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;


class CustomerTest extends TestCase
{

    protected $testClient;
    protected $idClient;

    /** @test
    *@doesNotPerformAssertions
     */
    public function setUp()
    {
        $this->testClient=new Client(['base_uri' => 'http://localhost:8091']);
        $this->idClient=0;
    }

    /** @test */
    public function Test_Insert_Customer()
    {
        // create our http client (Guzzle)


        $response = $this->testClient->request('POST', '/api/v1/customer', ['json' => [
            'full_name' => 'Paulus',
            'nick_name' => 'Paul',
            'birth_date' => '1982-04-17',
            'male' => 'true',
            'email_address' =>'Paulus@yahoo.com',
            'phone_number' =>'08111994426',
            'password' =>'test'
        ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());
        //$this->assertTrue($response->hasHeader('Location'));
        $data = json_decode($response->getBody(true), true);
        $this->idClient=$data['id'];
        $responseDelete = $this->testClient->request('DELETE', '/api/v1/customer/' . $this->idClient);
        //$this->assertEquals("Alva_25", $data['full_name']);
        //$this->assertArrayHasKey('full_name', $data);
        $this->assertEquals("Paulus",  $data['full_name'],"Data FULL_NAME tidak sama antara INPUT and RESULT");
        $this->assertEquals("Paul",  $data['nick_name'],"Data NICK_NAME tidak sama antara INPUT and RESULT");
        $this->assertEquals("1982-04-17",  $data['birth_date'],"Data BIRTH_DATE tidak sama antara INPUT and RESULT");
        $this->assertEquals("true",  $data['male'],"Data MALE tidak sama antara INPUT and RESULT");
        $this->assertEquals("Paulus@yahoo.com",  $data['email_address'],"Data EMAIL_ADDRESS tidak sama antara INPUT and RESULT");
        $this->assertEquals("08111994426",  $data['phone_number'],"Data PHONE_NUMBER tidak sama antara INPUT and RESULT");
        $this->assertEquals("test",  $data['password'],"Data PASSWORD tidak sama antara INPUT and RESULT");

    }

}
