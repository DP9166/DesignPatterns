<?php


namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\parts\Vehicle;


/*
 * Director 类 是建造者模式的一部分。 它可以实现建造者模式的接口,
 * 并在构造器的帮助下构建一个复杂的对象
 *
 *
 *
 * 复杂对象相当于一辆待建造的汽车, 而对象属性相当于汽车的部件, 建造产品的过程就相当于
 * 组件部件的过程。
 * 由于组合部件的过程很复杂, 因此, 这些部件的组合过程往往被"外部化"到一个称为建造者的对象里
 * 建造者返回的是一个已经建造完毕的完整产品对象
 *
 * 定义:
 *     将一个复杂对象的构建与它的表示分离, 使得同样的构建过程可以创建不同的表示
 *
 * 包含角色
 *  Builder: 抽象建造者
 *      定义产品的创建方法和返回方法
 *  ConcreteBuilder: 具体建造者
 *  Director: 指挥者
 *      1. 隔离了客户和生产过程
 *      2. 调用建造者的相关方法, 返回一个完整的产品对象
 *  Product: 产品角色
 *
 *  缺点
 *      1. 建造者模式创建的产品一般具有较多的共同点, 其组成部分相似, 如果产品之间的差异性很大,
 *      则不适合使用建造者模式, 因此其使用范围受到一定限制
 *      2. 如果产品的内部变化复杂,  可能会导致需要定义很多具体建造者类来实现这种变化
 *
 *
 * 适用环境
 *      1. 需要生产的产品对象有复杂的内部结构, 这些产品对象通常包含多个属性
 *      2. 需要生产的产品对象的熟属性相互依赖, 需要指定生产顺序
 *      3. 对象的创建过程独立于创建该对象的类
 *      4. 隔离复杂对象的创建和使用
 *
 *
 * 与抽象工模式的比较
 *      1. 建造者返回一个组装好的完成产品, 抽象工厂模式返回一系列相关的产品
 *      2. 抽象工厂 客户端实例化工厂类, 然后调用工厂类方法获取所需产品对象,
 *          建造者模式, 客户端可以不直接调用建造者相关方法, 而是通过指挥者类来指导
 *          如何生产对象, 包括对象的组装过程和建造步骤。
 *          它侧重一步步构建一个复杂对象, 返回一个完整对象
 *      3. 如果将抽象工厂模式看成 <<汽车配件生产工厂>> 生产一个产品簇的产品,
 *          那么建造者模式就是一个 <<汽车组装工厂>> 通过对部件的组装可以返回一辆完整的汽车
 * */

class Director
{
    public function build(BuilderInterface $build): Vehicle
    {
        $build->createVehicle();
        $build->addDoors();
        $build->addEngine();
        $build->addWheel();

        return $build->getVehicle();
    }
}