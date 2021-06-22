<?php


namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class ProductServiceMockTest extends TestCase {

    private ProductRepository $repository;
    private ProductService $service;

    public function setUp(): void
    {
        $this->repository = $this->createMock(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testDeleteSuccess()
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->expects(self::once())
            ->method("delete")
            ->with(self::equalTo($product));

        $this->repository->expects(self::once())
            ->method("findById")
            ->with(self::equalTo($product->getId()))
            ->willReturn($product);

        $this->service->delete("1");
        self::assertTrue(true, "Success Delete");
    }

    public function testDeleteException()
    {
        $this->repository->expects(self::never())
            ->method("delete")
            ->with(self::equalTo("1"));
        
        $this->repository->expects(self::once())
            ->method("findById")
            ->with(self::equalTo("1"))
            ->willReturn(null);

        $this->expectException(\Exception::class);
        $this->service->delete("1");
    }

    public function testMock()
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->expects(self::once())
            ->method("findById")
            ->willReturn($product);

        $result = $this->repository->findById("1");
        self::assertSame($product, $result);
    }



}