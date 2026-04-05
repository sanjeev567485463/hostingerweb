<?php

return [

    /**
     * What attributes do we use to build the slug?
     * This can be a single field, like "name" which will build a slug from:
     *
     *     $model->name;
     *
     * Or it can be an array of fields, like ("name", "company"), which builds a slug from:
     *
     *     $model->name . ' ' . $model->company;
     *
     * If you've defined custom getters in your model, you can use those too,
     * since Eloquent will call them when you request a custom attribute.
     *
     * Defaults to null, which uses the toString() method on your model.
     */
    'source' => null,

    /**
     * The maximum length of a generated slug. Defaults to null, which means
     * no length restrictions are enforced.
     */
    'maxLength' => null,

    /**
     * If you are setting a maximum length on your slugs, you may not want the
     * truncated string to split a word in half.
     */
    'maxLengthKeepWords' => true,

    /**
     * Leave this null so the package uses its default slugger. Closures inside
     * config files break Laravel config caching in production.
     */
    'method' => null,

    /**
     * Separator to use when generating slugs.
     */
    'separator' => '-',

    /**
     * Enforce uniqueness of slugs?
     */
    'unique' => true,

    /**
     * Customize the unique suffix when needed.
     */
    'uniqueSuffix' => null,

    /**
     * Include soft deleted records when checking slug uniqueness.
     */
    'includeTrashed' => false,

    /**
     * Reserved slug names.
     */
    'reserved' => null,

    /**
     * Whether to update the slug value when a model is re-saved.
     */
    'onUpdate' => false,

];
