<?php


namespace app\core\forms;


use app\core\Model;

abstract class BaseInput
{
    public Model $model;
    public string $attr;

    public function __construct(Model $model, string $attr)
    {
        $this->model = $model;
        $this->attr = $attr;
    }

    public function __toString(): string
    {
        return sprintf(
            '
			<div class="mb-2">
				<label for="%s" class="block text-md text-gray-600 font-medium">%s</label>
				%s
				<div class="text-sm text-red-600">%s</div>
			</div>
		',
            $this->attr,
            $this->model->get_label($this->attr),
            $this->renderInput(),
            $this->model->firstErr($this->attr)
        );
    }

    abstract public function renderInput(): string;
}