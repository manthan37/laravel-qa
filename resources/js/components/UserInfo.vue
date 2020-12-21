<template>
    <div>
        <span class="text-muted">
            {{ postDate }}
        </span>
        <div class="media mt-2">
            <a :href="data.user.url" class="pr-2"
                ><img :src="data.user.avatar" height="32" alt="" />
            </a>

            <div class="media-body mt-1">
                <a :href="data.user.url">{{ data.user.name }}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["model", "label"],
    computed: {
        postDate() {
            return this.label + " By " + this.model.created_date;
        },
        data() {
            return { user: this.model.user };
        }
    }
};
</script>
