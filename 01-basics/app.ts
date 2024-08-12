function isValidString(input: string): boolean {
    const regex = /^[A-Za-z0-9-]+$/;
    return regex.test(input);
}