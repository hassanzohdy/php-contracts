<?php
namespace HZ\Contracts\Http;

interface RouterInterface
{
    /**
     * Add a GET route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function get(string $route, string $controller): RouterInterface;

    /**
     * Add a POST route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function post(string $route, string $controller): RouterInterface;

    /**
     * Add a PUT route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function put(string $route, string $controller): RouterInterface;

    /**
     * Add a delete route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function delete(string $route, string $controller): RouterInterface;

    /**
     * Add a PATCH route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function patch(string $route, string $controller): RouterInterface;

    /**
     * Add an OPTIONS route
     * 
     * @param  string $route
     * @param  string $action >> controller@method
     * @return RouterInterface
     */
    public function options(string $route, string $controller): RouterInterface;

    /**
     * Generate a pattern for the given route
     * 
     * @param  string $route
     * @return string
     */
    public function generateRoutePattern(string $route): string;

    /**
     * Get current route with its full options
     * 
     * @return array
     */
    public function current(): array;    

    /**
     * Scan all routes to determine the current route
     * 
     * @return void
     */
    public function scan();
}