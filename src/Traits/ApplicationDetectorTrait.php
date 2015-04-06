<?php  namespace Aedart\Laravel\Detector\Traits;

use Illuminate\Contracts\Foundation\Application;

/**
 * Trait Application Detector
 *
 * @see \Aedart\Laravel\Detector\Interfaces\IApplicationDetector
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Laravel\Detector\Traits
 */
trait ApplicationDetectorTrait {

    /**
     * Check if a Laravel Application instance is available and
     * has not been flushed
     *
     * @return bool True if a Laravel application is available and not yet flushed, false if
     *              application is not available Or if it is available, but has been flushed!
     */
    public function isApplicationAvailable(){
        return $this->isContainerAvailable() && !$this->hasBeenFlushed(app());
    }

    /**
     * Check if there is an application instance (the container) available
     *
     * <b>Warning</b>: Method does NOT check if eventual application
     * instance has been flushed.
     *
     * @see hasBeenFlushed()
     * @see \Illuminate\Contracts\Container\Container
     *
     * @return bool True if an application instance is available, false if not
     */
    public function isContainerAvailable(){
        // There are multiple ways ot attempting to detect if
        // the container is available. Yet, in the most cases, we just
        // desire to know if the helpers method app() exists and returns
        // a valid instance.
        // Note - the app() method is only available when the entire
        // framework is available, meaning that it is located inside the
        // Foundation namespace (not available as a separate package)
        if(function_exists('app')){
            $app = app();
            if(!is_null($app) && $app instanceof Application){
                return true;
            }
        }
        return false;
    }

    /**
     * Check if the given application instance has been flushed
     *
     * @param Application $application The Laravel application instance
     *
     * @return bool True if the given application instance has been flushed, false if not
     */
    public function hasBeenFlushed(Application $application){
        // The problem that we are facing here, is that there is no way
        // of telling if the 'flush' method has been invoked, by just asking
        // directly. The only possible way, is to assume that if there are
        // no loaded service providers, then the application must have been
        // flushed or not yet booted. However, while the concrete implementation
        // does provide a method called 'getLoadedProviders', the Application-interface
        // that this method accepts, doesn't know about such a method at all!
        // In addition, if by some chance a very customised application is running,
        // there might not be any service providers attached to it.
        //
        // Nevertheless, we have to assume that;
        // a) If no core application has been resolved, the application has been flushed
        // b) If no core container has been resolved, the application has been flushed
        // @see \Illuminate\Foundation\Application::__construct
        //
        // The only way that we can obtain this information, is to rely on the 'resolved'
        // method, for telling us if certain instances have been resolved...
        //
        // In this case, we are looking for two special cases - the core application and the
        // core container of the application. If these are present / available, it should mean
        // that the application is still running and has yet not been flushed
        if($application->resolved('app') && $application->resolved('Illuminate\Container\Container')){
            return false;
        }
        return true;
    }
}