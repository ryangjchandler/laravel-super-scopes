<?php

namespace Illuminate\Contracts\Database\Eloquent {
    use Illuminate\Database\Eloquent\Scope;

    interface Builder {
        public function scope(string|Scope $scope): static;
    }
}
