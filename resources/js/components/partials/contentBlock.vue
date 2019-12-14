<template>
    <div class="content-block">
        <div class="flex">
        <div class="w-full lg:w-7/12 text-content">
            <div class="content">
                <slot name="text">

                </slot>
            </div>
        </div>
        <div class="w-full lg:w-5/12 image">
            <slot name="image">

            </slot>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>