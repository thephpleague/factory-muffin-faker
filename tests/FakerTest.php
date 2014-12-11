<?php

/**
 * This file is part of Factory Muffin Faker.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

use League\FactoryMuffin\Faker\Facade as Faker;

/**
 * This is the faker test class.
 *
 * @group faker
 *
 * @author  Scott Robertson <scottymeuk@gmail.com>
 * @author  Graham Campbell <graham@mineuk.com>
 * @license <https://github.com/thephpleague/factory-muffin-faker/blob/master/LICENSE> MIT
 */
class FakerTest extends PHPUnit_Framework_TestCase
{
    public function testGetGenerator()
    {
        $original = Faker::getGenerator();
        $new = Faker::setLocale('en_GB')->getGenerator();

        $this->assertInstanceOf('Faker\Generator', $original);
        $this->assertInstanceOf('Faker\Generator', $new);

        $this->assertFalse($original === $new);
    }

    public function testProviders()
    {
        $this->assertInternalType('array', $array = Faker::getProviders());
        $this->assertSame(Faker::getGenerator(), Faker::addProvider($array[0])->getGenerator());
    }

    public function testFormat()
    {
        $this->assertInstanceOf('Closure', Faker::format('foo'));
        $this->assertInstanceOf('Closure', $sentence = Faker::word());
        $this->assertInternalType('string', $sentence());
        $formatter = Faker::getFormatter('numberBetween');
        $this->assertSame(5, $formatter(5, 5));
    }

    public function testReset()
    {
        $original = Faker::instance();
        $new = Faker::reset();
        $this->assertInstanceOf('League\FactoryMuffin\Faker\Faker', $original);
        $this->assertInstanceOf('League\FactoryMuffin\Faker\Faker', $new);
        $this->assertNotEquals($original, $new);
    }
}
