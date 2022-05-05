<?php

namespace RyanChandler\LaravelSuperScopes;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class LaravelSuperScopesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Builder::macro('scope', function (string|Scope $scope) {
            /** @var \Illuminate\Contracts\Database\Eloquent\Builder $this */
            $model = $this->newModelInstance();

            if ($scope instanceof Scope) {
                $scope->apply($this, $model);
            } elseif (class_exists($scope)) {
                app()->call($scope, [$this, $model], 'apply');
            }

            return $this;
        });
    }
}
