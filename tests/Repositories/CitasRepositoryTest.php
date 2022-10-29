<?php namespace Tests\Repositories;

use App\Models\Citas;
use App\Repositories\CitasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CitasRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CitasRepository
     */
    protected $citasRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->citasRepo = \App::make(CitasRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_citas()
    {
        $citas = Citas::factory()->make()->toArray();

        $createdCitas = $this->citasRepo->create($citas);

        $createdCitas = $createdCitas->toArray();
        $this->assertArrayHasKey('id', $createdCitas);
        $this->assertNotNull($createdCitas['id'], 'Created Citas must have id specified');
        $this->assertNotNull(Citas::find($createdCitas['id']), 'Citas with given id must be in DB');
        $this->assertModelData($citas, $createdCitas);
    }

    /**
     * @test read
     */
    public function test_read_citas()
    {
        $citas = Citas::factory()->create();

        $dbCitas = $this->citasRepo->find($citas->id);

        $dbCitas = $dbCitas->toArray();
        $this->assertModelData($citas->toArray(), $dbCitas);
    }

    /**
     * @test update
     */
    public function test_update_citas()
    {
        $citas = Citas::factory()->create();
        $fakeCitas = Citas::factory()->make()->toArray();

        $updatedCitas = $this->citasRepo->update($fakeCitas, $citas->id);

        $this->assertModelData($fakeCitas, $updatedCitas->toArray());
        $dbCitas = $this->citasRepo->find($citas->id);
        $this->assertModelData($fakeCitas, $dbCitas->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_citas()
    {
        $citas = Citas::factory()->create();

        $resp = $this->citasRepo->delete($citas->id);

        $this->assertTrue($resp);
        $this->assertNull(Citas::find($citas->id), 'Citas should not exist in DB');
    }
}
