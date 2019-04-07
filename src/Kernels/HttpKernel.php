<?php
/**
 * @package   WPEmerge
 * @author    Atanas Angelov <atanas.angelov.dev@gmail.com>
 * @copyright 2018 Atanas Angelov
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0
 * @link      https://wpemerge.com/
 */

namespace WPEmerge\Kernels;

use Psr\Http\Message\ResponseInterface;
use WPEmerge\Requests\RequestInterface;

/**
 * Describes how a request is handled.
 */
interface HttpKernel {
	/**
	 * Bootstrap the kernel.
	 *
	 * @return void
	 */
	public function bootstrap();

	/**
	 * Return a response for a given request.
	 *
	 * @param  RequestInterface       $request
	 * @param  string                 $view
	 * @return ResponseInterface|null
	 */
	public function handle( RequestInterface $request, $view );
}
